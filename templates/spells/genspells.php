<?php
//ini_set('display_errors', 1);
$spellfile = "clientfiles/" .getLogIP()."/spells_us.txt";

$spellquery = "SELECT * FROM spells_new ORDER BY id";
$dirname = dirname($spellfile);
if (!is_dir($dirname))
{
    mkdir($dirname, 0755, true);
}
$res = mysql_query($spellquery);


$fh = fopen($spellfile, 'w');

if(!$fh) { die("Error opening $spellfile for writing.  Make sure the path is writable."); }

$cnt = 0;
$lastid = 0;

//Based on export_spells.pl bundled with eqemu, the spells_us.txt file is just a ^ delemited copy of the spell table.
while($row = mysql_fetch_assoc($res))
{
 $cnt++;
 if($row['id'] > $lastid) { $lastid = $row['id']; }
 if (fwrite($fh, implode("^", $row) . "\n") == FALSE) {
	echo "Cannot write to this file ($spellfile)";
	exit;
 }
}
fclose($fh);

//this folder must be writeable by the server
	$backup = "clientfiles/" .getLogIP()."/";
	$zip_file = $backup.'/spells_us.rar';
    $zip = new ZipArchive();
    if ($zip->open($zip_file, ZIPARCHIVE::CREATE)!==TRUE) 
    {
        exit("cannot open <$filename>\n");
    }
     $zip->addFile($spellfile, "spells_us.txt");
    $zip->close();


?>
  <table class="edit_form">
    <tr>
      <td class="edit_form_header">Generate Spell File</td>
    </tr>
    <tr>
      <td class="edit_form_content">
        <center>
<?echo $cnt; ?> spells written.<br><?echo $lastid; ?> is the highest ID<br><b><a href="<?=$zip_file?>">Right click and choose 'Save Link As' or 'Save Target As' to download spell file</a></b>
        </center>
      </td>
    </tr>
  </table>
