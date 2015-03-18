<?php

$dbstrus = "clientfiles/" .getLogIP()."/dbstr_us.txt";

$spellquery = "SELECT * FROM dbstr_us ORDER BY descnum ASC, type_ ASC";
$dirname = dirname($dbstrus);
if (!is_dir($dirname))
{
    mkdir($dirname, 0755, true);
}
$res = mysql_query($spellquery);

$fh = fopen($dbstrus, 'w');
if(!$fh) { die("Error opening $dbstrus for writing.  Make sure the path is writable."); }

$cnt = 0;
$lastid = 0;

//Based on export_spells.pl bundled with eqemu, the dbstr_us.txt file is just a ^ delemited copy of the spell table.
while($row = mysql_fetch_assoc($res))
{
 $cnt++;
 if($row['descnum'] > $lastid) { $lastid = $row['descnum']; }
 fwrite($fh, implode("^", $row) . "^\n");
}

fclose($fh);

//this folder must be writeable by the server
	$backup = "clientfiles/" .getLogIP()."/";
	$zip_file = $backup.'/dbstr_us.rar';
    $zip = new ZipArchive();
    if ($zip->open($zip_file, ZIPARCHIVE::CREATE)!==TRUE) 
    {
        exit("cannot open <$filename>\n");
    }
     $zip->addFile($dbstrus, "dbstr_us.txt");
    $zip->close();


?>
  <table class="edit_form">
    <tr>
      <td class="edit_form_header">Generate dbstr_us File</td>
    </tr>
    <tr>
      <td class="edit_form_content">
        <center>
<?echo $cnt; ?> strings written.<br><?echo $lastid; ?> is the highest ID<br><b><a href="<?=$zip_file?>">Right click and choose 'Save Link As' or 'Save Target As' to download dbstr_us file</a></b>
        </center>
      </td>
    </tr>
  </table>
