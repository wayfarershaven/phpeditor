  <form name="item_edit" method="post" action="index.php?editor=items&id=<?=$id?>&action=1000">
    <div class="edit_form">
      <div class="edit_form_header">
        Add Tiered Items
      </div>
      <div class="edit_form_content">
        <fieldset style="text-align: left;">
          <legend><strong><font size="4">General</font></strong></legend>
          <input type="hidden" name="id" value="<?=$id?>" />
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="12%">ID:<br/><input type="text" name="id" size="7" value="<?=$newid?>"></td>
              <td align="left" width="33%">Name:<br/><input type="text" name="itemname" size="45" value="<?if(isset($itemname)):?><?=$itemname?><?endif;?>"></td>
              <td align="left" width="33%">
                Type:<br/>
                <select name="itemtype" style="width:265px;">
<?foreach($itemtypes as $k => $v):?>
				  <option value="<?=$k?>"<? echo (isset($itemtype) && $k == $itemtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                </select>
              </td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="50%">Lore Name:<br/><input type="text" name="lore" size="45" value="<?if(isset($lore)):?><?=$lore?><?endif;?>"></td>
              <td align="left" width="50%">
                Class:<br/>
                <select name="itemclass">
                  <option value="0"<?echo (isset($itemclass) && $itemclass == 0) ? " selected" : ""?>>Common Item</option>
                  <option value="1"<?echo (isset($itemclass) && $itemclass == 1) ? " selected" : ""?>>Container</option>
                  <option value="2"<?echo (isset($itemclass) && $itemclass == 2) ? " selected" : ""?>>Book</option>
                </select>
              </td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="33%">Stackable:<br/>
                <select name="stackable">
                  <option value="0"<?echo (isset($stackable) && $stackable == 0) ? " selected" : ""?>>0: No</option>
                  <option value="1"<?echo (isset($stackable) && $stackable == 1) ? " selected" : ""?>>1: Yes</option>
                </select>
              </td>
              <td align="left" width="33%">Stacksize:<br/><input type="text" name="stacksize" size="10" value="<?if(isset($stacksize)):?><?=$stacksize?><?else:?>1<?endif;?>"></td>
              <td align="left" width="33%">Charges:<br/><input type="text" name="maxcharges" size="10" value="<?if(isset($maxcharges)):?><?=$maxcharges?><?else:?>0<?endif;?>"></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
<?if(isset($filename) && $filename != ''):?>
              <td align="left" width="25%"><a href="index.php?editor=items&id=<?=$id?>&name=<?=$filename?>&action=3">File Name:<br/><input type="text" name="filename" size="20" value=""></td>
<?endif;?>
<?if(isset($filename) && $filename != ''):?>
              <td align="left" width="33%">File Name:<br/><input type="text" name="filename" size="20" value=""></td>
<?endif;?>
              <td align="left" width="33%">
                Book:<br/>
                <select name="book">
                  <option value="0"<?echo (isset($book) && $book == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($book) && $book == 1) ? " selected" : ""?>>Yes</option>
                  <option value="2"<?echo (isset($book) && $book == 2) ? " selected" : ""?>>Message</option>
                </select>
              </td>
              <td align="left" width="33%">Booktype:<br/><input type="text" name="booktype" size="10" value="<?if(isset($booktype)):?><?=$booktype?><?else:?>0<?endif;?>"></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="33%">Charmfile:<br/><input type="text" name="charmfile" size="20" value="<?if(isset($charmfile)):?><?=$charmfile?><?endif;?>"></td>
              <td align="left" width="33%">Charmfile ID:<br/><input type="text" name="charmfileid" size="10" value="<?if(isset($charmfileid)):?><?=$charmfileid?><?else:?>0<?endif;?>"></td>
              <td align="left" width="33%">Script File ID:<br/><input type="text" name="scriptfileid" size="10" value="<?if(isset($scriptfileid)):?><?=$scriptfileid?><?else:?>0<?endif;?>""></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="33%">Power Source Capacity:<br/><input type="text" name="powersourcecapacity" size="10" value="<?if(isset($powersourcecapacity)):?><?=$powersourcecapacity?><?else:?>0<?endif;?>"></td>
              <td align="left" width="33%">Potion Belt Slots:<br/><input type="text" name="potionbeltslots" size="10" value="<?if(isset($potionbeltslots)):?><?=$potionbeltslots?><?else:?>0<?endif;?>"></td>
              <td align="left" width="33%">&nbsp;</td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="25%">
                Bag Size:<br/>
                <select class="left" name="bagsize">
<?foreach($itembagsize as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($bagsize) && $k == $bagsize) ? " selected" : ""?>><?=$v?></option>
<?endforeach;?>
                </select>
              </td>
              <td align="left" width="25%">Bag Slots:<br/><input type="text" name="bagslots" size="10" value="<?if(isset($bagslots)):?><?=$bagslots?><?else:?>0<?endif;?>"></td>
              <td align="left" width="25%">Bag Weight Reduction:<br/><input type="text" name="bagwr" size="10" value="<?if(isset($bagwr)):?><?=$bagwr?><?else:?>0<?endif;?>"></td>
              <td align="left" width="25%">
                Bag Type:<br/>
                <select class="left" name="bagtype">
<?foreach($world_containers as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($bagtype) && $k == $bagtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                </select>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend><strong><font size="4">Restrictions</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="16%">
                No Drop:<br/>
                <select name="nodrop">
                  <option value="1"<?echo (isset($nodrop) && $nodrop == 1) ? " selected" : ""?>>No</option>
                  <option value="0"<?echo (isset($nodrop) && $nodrop == 0) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                No Rent:<br/>
                <select name="norent">
                  <option value="1"<?echo (isset($norent) && $norent == 1) ? " selected" : ""?>>No</option>
                  <option value="0"<?echo (isset($norent) && $norent == 0) ? " selected" : ""?>>Yes</option>
                  <option value="255"<?echo (isset($norent) && $norent == 255) ? " selected" : ""?>>255</option>
                </select>
              </td>
              <td align="left" width="16%">
                Magic:<br/>
                <select name="magic">
                  <option value="0"<?echo (isset($magic) && $magic == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($magic) && $magic == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Tradeskill:<br/>
                <select name="tradeskills">
                  <option value="0"<?echo (isset($tradeskills) && $tradeskills == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($tradeskills) && $tradeskills == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Artifact:<br/>
                <select name="artifactflag">
                  <option value="0"<?echo (isset($artifactflag) && $artifactflag == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($artifactflag) && $artifactflag == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Quest:<br/>
                <select name="questitemflag">
                  <option value="0"<?echo (isset($questitemflag) && $questitemflag == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($questitemflag) && $questitemflag == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="left" width="16%">
                Attuneable:<br/>
                <select name="attuneable">
                  <option value="0"<?echo (isset($attuneable) && $attuneable== 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($attuneable) && $attuneable == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                No Pet:<br/>
                <select name="nopet">
                  <option value="0"<?echo (isset($nopet) && $nopet == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($nopet) && $nopet == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                FV No Drop:<br/>
                <select name="fvnodrop">
                  <option value="0"<?echo (isset($fvnodrop) && $fvnodrop == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($fvnodrop) && $fvnodrop == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                No Transfer:<br/>
                <select name="notransfer">
                  <option value="0"<?echo (isset($notransfer) && $notransfer == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($notransfer) && $notransfer == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Potion Belt:<br/>
                <select name="potionbelt">
                  <option value="0"<?echo (isset($potionbelt) && $potionbelt == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($potionbelt) && $potionbelt == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Benefit:<br/>
                <select name="benefitflag">
                  <option value="0"<?echo (isset($benefitflag) && $benefitflag == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($benefitflag) && $benefitflag == 1) ? " selected" : ""?>>Yes</option>
                  <option value="3"<?echo (isset($benefitflag) && $benefitflag == 3) ? " selected" : ""?>>3</option>
                </select>
              </td>
            </tr>
            <tr>
              <td align="left" width="16%">
                Expendable Arrow:<br/>
                <select name="expendablearrow">
                  <option value="0"<?echo (isset($expendablearrow) && $expendablearrow == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($expendablearrow) && $expendablearrow == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="16%">
                Lore:<br/><input type="text" name="loregroup" size="5" value="<?if(isset($loregroup)):?><?=$loregroup?><?else:?>0<?endif;?>">
              </td>
              <td align="left" width="16%">
                Req Level:<br/><input type="text" name="reqlevel" size="5" value="<?if(isset($reqlevel)):?><?=$reqlevel?><?else:?>0<?endif;?>">
              </td>
              <td align="left" width="16%">
                Rec Level:<br/><input type="text" name="reclevel" size="5" value="<?if(isset($reclevel)):?><?=$reclevel?><?else:?>0<?endif;?>">
              </td>
              <td align="left" width="16%">
                Rec Skill:<br/><input type="text" name="recskill" size="5" value="<?if(isset($recskill)):?><?=$recskill?><?else:?>0<?endif;?>">
              </td>
              <td align="left" width="16%">
                Evolving Level:<br/><input type="text" name="evolvinglevel" size="5" value="<?if(isset($evolvinglevel)):?><?=$evolvinglevel?><?else:?>0<?endif;?>">
              </td>
            </tr>
          </table>
          <table cellpadding="20px">
            <tr>
              <td valign="top" align="left">
                Slots:<br/>
                <input type="checkbox" name="slot_Charm" value="1" <?echo (isset($slots) && $slots & 1) ? "checked" : ""?>> Charm<br/>
                <input type="checkbox" name="slot_Ear01" value="2" <?echo (isset($slots) && $slots & 2) ? "checked" : ""?>> Ear01<br/>
                <input type="checkbox" name="slot_Head" value="4" <?echo (isset($slots) && $slots & 4) ? "checked" : ""?>> Head<br/>
                <input type="checkbox" name="slot_Face" value="8" <?echo (isset($slots) && $slots & 8) ? "checked" : ""?>> Face<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="slot_Ear02" value="16" <?echo (isset($slots) && $slots & 16) ? "checked" : ""?>> Ear02<br/>
                <input type="checkbox" name="slot_Neck" value="32" <?echo (isset($slots) && $slots & 32) ? "checked" : ""?>> Neck<br/>
                <input type="checkbox" name="slot_Shoulder" value="64" <?echo (isset($slots) && $slots & 64) ? "checked" : ""?>> Shoulders<br/>
                <input type="checkbox" name="slot_Arms" value="128" <?echo (isset($slots) && $slots & 128) ? "checked" : ""?>> Arms<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="slot_Back" value="256" <?echo (isset($slots) && $slots & 256) ? "checked" : ""?>> Back<br/>
                <input type="checkbox" name="slot_Bracer01" value="512" <?echo (isset($slots) && $slots & 512) ? "checked" : ""?>> Bracer01<br/>
                <input type="checkbox" name="slot_Bracer02" value="1024" <?echo (isset($slots) && $slots & 1024) ? "checked" : ""?>> Bracer02<br/>
                <input type="checkbox" name="slot_Range" value="2048" <?echo (isset($slots) && $slots & 2048) ? "checked" : ""?>> Range<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="slot_Hands" value="4096" <?echo (isset($slots) && $slots & 4096) ? "checked" : ""?>> Hands<br/>
                <input type="checkbox" name="slot_Primary" value="8192" <?echo (isset($slots) && $slots & 8192) ? "checked" : ""?>> Primary<br/>
                <input type="checkbox" name="slot_Secondary" value="16384" <?echo (isset($slots) && $slots & 16384) ? "checked" : ""?>> Secondary<br/>
                <input type="checkbox" name="slot_Ring01" value="32768" <?echo (isset($slots) && $slots & 32768) ? "checked" : ""?>> Ring01<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="slot_Ring02" value="65536" <?echo (isset($slots) && $slots & 65536) ? "checked" : ""?>> Ring02<br/>
                <input type="checkbox" name="slot_Chest" value="131072" <?echo (isset($slots) && $slots & 131072) ? "checked" : ""?>> Chest<br/>
                <input type="checkbox" name="slot_Legs" value="262144" <?echo (isset($slots) && $slots & 262144) ? "checked" : ""?>> Legs<br/>
                <input type="checkbox" name="slot_Feet" value="524288" <?echo (isset($slots) && $slots & 524288) ? "checked" : ""?>> Feet<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="slot_Waist" value="1048576" <?echo (isset($slots) && $slots & 1048576) ? "checked" : ""?>> Waist<br/>
                <input type="checkbox" name="slot_Ammo" value="2097152" <?echo (isset($slots) && $slots & 2097152) ? "checked" : ""?>> Ammo<br/>
                <input type="checkbox" name="slot_Powersource" value="4194304" <?echo (isset($slots) && $slots & 4194304) ? "checked" : ""?>> Powersource<br/>
                <input type="checkbox" name="all_none" value="yes" onClick="Check(document.item_edit)"> <b>All/None</b><br/>
              </td>
            </tr>
          </table>
          <table cellpadding="20px">
            <tr>
              <td valign="top" align="left">
                Races:<br/>
                <input type="checkbox" name="race_Human" value="1" <?echo (isset($races) && $races & 1) ? "checked" : ""?>> Human<br/>
                <input type="checkbox" name="race_Barbarian" value="2" <?echo (isset($races) && $races & 2) ? "checked" : ""?>> Barbarian<br/>
                <input type="checkbox" name="race_Erudite" value="4" <?echo (isset($races) && $races & 4) ? "checked" : ""?>> Erudite<br/>
                <input type="checkbox" name="race_Wood_Elf" value="8" <?echo (isset($races) && $races & 8) ? "checked" : ""?>> Wood Elf<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="race_High_Elf" value="16" <?echo (isset($races) && $races & 16) ? "checked" : ""?>> High Elf<br/>
                <input type="checkbox" name="race_Dark_Elf" value="32" <?echo (isset($races) && $races & 32) ? "checked" : ""?>> Dark Elf<br/>
                <input type="checkbox" name="race_Half_Elf" value="64" <?echo (isset($races) && $races & 64) ? "checked" : ""?>> Half Elf<br/>
                <input type="checkbox" name="race_Dwarf" value="128" <?echo (isset($races) && $races & 128) ? "checked" : ""?>> Dwarf<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="race_Troll" value="256" <?echo (isset($races) && $races & 256) ? "checked" : ""?>> Troll<br/>
                <input type="checkbox" name="race_Ogre" value="512" <?echo (isset($races) && $races & 512) ? "checked" : ""?>> Ogre<br/>
                <input type="checkbox" name="race_Halfling" value="1024" <?echo (isset($races) && $races & 1024) ? "checked" : ""?>> Halfling<br/>
                <input type="checkbox" name="race_Gnome" value="2048" <?echo (isset($races) && $races & 2048) ? "checked" : ""?>> Gnome<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="race_Iksar" value="4096" <?echo (isset($races) && $races & 4096) ? "checked" : ""?>> Iksar<br/>
                <input type="checkbox" name="race_Vah_Shir" value="8192" <?echo (isset($races) && $races & 8192) ? "checked" : ""?>> Vah Shir<br/>
                <input type="checkbox" name="race_Froglok" value="16384" <?echo (isset($races) && $races & 16384) ? "checked" : ""?>> Froglok<br/>
                <input type="checkbox" name="race_Drakkin" value="32768" <?echo (isset($races) && $races & 32768) ? "checked" : ""?>> Drakkin<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="race_Shroud" value="65536" <?echo (isset($races) && $races & 65536) ? "checked" : ""?>> Shroud<br/>
                <input type="checkbox" name="all_none2" value="yes" onClick="Check2(document.item_edit)"> <b>All/None</b><br/>
              </td>
            </tr>
          </table>
          <table cellpadding="20px">
            <tr>
              <td valign="top" align="left">
                Classes:<br/>
                <input type="checkbox" name="class_Warrior" value="1" <?echo (isset($classes) && $classes & 1) ? "checked" : ""?>> Warrior<br/>
                <input type="checkbox" name="class_Cleric" value="2" <?echo (isset($classes) && $classes & 2) ? "checked" : ""?>> Cleric<br/>
                <input type="checkbox" name="class_Paladin" value="4" <?echo (isset($classes) && $classes & 4) ? "checked" : ""?>> Paladin<br/>
                <input type="checkbox" name="class_Ranger" value="8" <?echo (isset($classes) && $classes & 8) ? "checked" : ""?>> Ranger<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="class_Shadowknight" value="16" <?echo (isset($classes) && $classes & 16) ? "checked" : ""?>> Shadowknight<br/>
                <input type="checkbox" name="class_Druid" value="32" <?echo (isset($classes) && $classes & 32) ? "checked" : ""?>> Druid<br/>
                <input type="checkbox" name="class_Monk" value="64" <?echo (isset($classes) && $classes & 64) ? "checked" : ""?>> Monk<br/>
                <input type="checkbox" name="class_Bard" value="128" <?echo (isset($classes) && $classes & 128) ? "checked" : ""?>> Bard<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="class_Rogue" value="256" <?echo (isset($classes) && $classes & 256) ? "checked" : ""?>> Rogue<br/>
                <input type="checkbox" name="class_Shaman" value="512" <?echo (isset($classes) && $classes & 512) ? "checked" : ""?>> Shaman<br/>
                <input type="checkbox" name="class_Necromancer" value="1024" <?echo (isset($classes) && $classes & 1024) ? "checked" : ""?>> Necromancer<br/>
                <input type="checkbox" name="class_Wizard" value="2048" <?echo (isset($classes) && $classes & 2048) ? "checked" : ""?>> Wizard<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="class_Magician" value="4096" <?echo (isset($classes) && $classes & 4096) ? "checked" : ""?>> Magician<br/>
                <input type="checkbox" name="class_Enchanter" value="8192" <?echo (isset($classes) && $classes & 8192) ? "checked" : ""?>> Enchanter<br/>
                <input type="checkbox" name="class_Beastlord" value="16384" <?echo (isset($classes) && $classes & 16384) ? "checked" : ""?>> Beastlord<br/>
                <input type="checkbox" name="class_Berserker" value="32768" <?echo (isset($classes) && $classes & 32768) ? "checked" : ""?>> Berserker<br/>
              </td>
              <td valign="top" align="left">
                <br/>
                <input type="checkbox" name="all_none3" value="yes" onClick="Check3(document.item_edit)"> <b>All/None</b><br/>
              </td>
            </tr>
          </table>
          <table cellpadding="20px">
            <tr>
              <td valign="top" align="left">
                Deities:<br/>
                <input type="checkbox" name="deity_Agnostic" value="1" <?echo (isset($deity) && $deity & 1) ? "checked" : ""?>> Agnostic<br/>
                <input type="checkbox" name="deity_Bertox" value="2" <?echo (isset($deity) && $deity & 2) ? "checked" : ""?>> Bertoxxulous<br/>
                <input type="checkbox" name="deity_Brell" value="4" <?echo (isset($deity) && $deity & 4) ? "checked" : ""?>> Brell Serilis<br/>
                <input type="checkbox" name="deity_Cazic" value="8" <?echo (isset($deity) && $deity & 8) ? "checked" : ""?>> Cazic-Thule<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="deity_Erollsi" value="16" <?echo (isset($deity) && $deity & 16) ? "checked" : ""?>> Erollisi Marr<br/>
                <input type="checkbox" name="deity_Bristlebane" value="32" <?echo (isset($deity) && $deity & 32) ? "checked" : ""?>> Bristlebane<br/>
                <input type="checkbox" name="deity_Innoruuk" value="64" <?echo (isset($deity) && $deity & 64) ? "checked" : ""?>> Innoruuk<br/>
                <input type="checkbox" name="deity_Karana" value="128" <?echo (isset($deity) && $deity & 128) ? "checked" : ""?>> Karana<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="deity_Mithaniel_Marr" value="256" <?echo (isset($deity) && $deity & 256) ? "checked" : ""?>> Mithaniel Marr<br/>
                <input type="checkbox" name="deity_Prexus" value="512" <?echo (isset($deity) && $deity & 512) ? "checked" : ""?>> Prexus<br/>
                <input type="checkbox" name="deity_Quellious" value="1024" <?echo (isset($deity) && $deity & 1024) ? "checked" : ""?>> Quellious<br/>
                <input type="checkbox" name="deity_Rallos_Zek" value="2048" <?echo (isset($deity) && $deity & 2048) ? "checked" : ""?>> Rallos Zek<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="deity_Rodcet_Nife" value="4096" <?echo (isset($deity) && $deity & 4096) ? "checked" : ""?>> Rodcet Nife<br/>
                <input type="checkbox" name="deity_Solusek_Ro" value="8192" <?echo (isset($deity) && $deity & 8192) ? "checked" : ""?>> Solusek Ro<br/>
                <input type="checkbox" name="deity_The_Tribunal" value="16384" <?echo (isset($deity) && $deity & 16384) ? "checked" : ""?>> The Tribunal<br/>
                <input type="checkbox" name="deity_Tunare" value="32768" <?echo (isset($deity) && $deity & 32768) ? "checked" : ""?>> Tunare<br/>
              </td>
              <td valign="top" align="left"><br/>
                <input type="checkbox" name="deity_Veeshan" value="65536" <?echo (isset($deity) && $deity & 65536) ? "checked" : ""?>> Veeshan<br/>
                <input type="checkbox" name="all_none4" value="yes" onClick="Check4(document.item_edit)"> <b>All/None</b><br/>
              </td>
            </tr>
          </table>
        </fieldset>
        <fieldset>
          <legend><strong><font size="4">Stats</font></strong></legend><br/>
		  <fieldset>
            <legend><font size="4">Scale</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">HP:<br/><input type="text" name="hp_scale" size="5" value="<?if(isset($hp_scale)):?><?=$hp_scale?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Mana / End:<br/><input type="text" name="manaend_scale" size="5" value="<?if(isset($manaend_scale)):?><?=$manaend_scale?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Base Stats:<br/><input type="text" name="basestats_scale" size="5" value="<?if(isset($basestats_scale)):?><?=$basestats_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="14%">AC:<br/><input type="text" name="ac_scale" size="5" value="<?if(isset($ac_scale)):?><?=$ac_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="14%">Haste:<br/><input type="text" name="haste_scale" size="5" value="<?if(isset($haste_scale)):?><?=$haste_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="15%">Regens:<br/><input type="text" name="regens_scale" size="5" value="<?if(isset($regens_scale)):?><?=$regens_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="15%">Resists:<br/><input type="text" name="resists_scale" size="5" value="<?if(isset($resists_scale)):?><?=$resists_scale?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
               <!-- NEED MORE SHIT HERE FOR SCALING -->
			    <td align="left" width="14%">Damage:<br/><input type="text" name="damage_scale" size="5" value="<?if(isset($damage_scale)):?><?=$damage_scale?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Backstab:<br/><input type="text" name="backstab_scale" size="5" value="<?if(isset($backstab_scale)):?><?=$backstab_scale?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Elem DMG:<br/><input type="text" name="elemdmg_scale" size="5" value="<?if(isset($elemdmg_scale)):?><?=$elemdmg_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="14%">Attack:<br/><input type="text" name="attack_scale" size="5" value="<?if(isset($attack_scale)):?><?=$attack_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="14%">Spell DMG:<br/><input type="text" name="spelldmg_scale" size="5" value="<?if(isset($spelldmg_scale)):?><?=$spelldmg_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="15%">Heal AMT:<br/><input type="text" name="healamt_scale" size="5" value="<?if(isset($healamt_scale)):?><?=$healamt_scale?><?else:?>0<?endif;?>"></td>
				<td align="left" width="15%">Mods:<br/><input type="text" name="mods_scale" size="5" value="<?if(isset($mods_scale)):?><?=$mods_scale?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Damage</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="33%">Damage:<br/><input type="text" name="damage" size="5" value="<?if(isset($damage)):?><?=$damage?><?else:?>0<?endif;?>"></td>
                <td align="left" width="33%">Delay:<br/><input type="text" name="delay" size="5" value="<?if(isset($delay)):?><?=$delay?><?else:?>0<?endif;?>"></td>
                <td align="left" width="33%">Range:<br/><input type="text" name="range" size="5" value="<?if(isset($range)):?><?=$range?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">Bane Dmg:<br/><input type="text" name="banedmgamt" size="5" value="<?if(isset($banedmgamt)):?><?=$banedmgamt?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Bane Race Dmg:<br/><input type="text" name="banedmgraceamt" size="5" value="<?if(isset($banedmgraceamt)):?><?=$banedmgraceamt?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">
                  Bane Race:<br/>
                  <select class="left" name="banedmgrace">
<?foreach($itemraces as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($banedmgrace) && $k == $banedmgrace) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>       
                  </select>
                </td>
                <td align="left" width="14%">
                  Bane Bodytype:<br/>
                  <select class="left" name="banedmgbody">
<?foreach($bodytypes as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($banedmgbody) && $k == $banedmgbody) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
              </tr>
            </table><br/>
            <fieldset>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                  <td align="left" width="35%">Extra Dmg Skill:<br/>
                    <select class="left" name="extradmgskill">
<?foreach($skilltypes as $k => $v):?>
                      <option value="<?=$k?>"<? echo (isset($extradmgskill) && $k == $extradmgskill) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>       
                    </select><br/>
                    Extra Dmg Amt:<br/>
                    <input type="text" name="extradmgamt" size="5" value="<?if(isset($extradmgamt)):?><?=$extradmgamt?><?else:?>0<?endif;?>">
                  </td>
                  <td align="left" width="25%">Elem Dmg Type:<br/>
                    <input type="text" name="elemdmgtype" size="5" value="<?if(isset($elemdmgtype)):?><?=$elemdmgtype?><?else:?>0<?endif;?>"><br/>
                    Elem Dmg Amt:<br/><input type="text" name="elemdmgamt" size="5" value="<?if(isset($elemdmgamt)):?><?=$elemdmgamt?><?else:?>0<?endif;?>">
                  </td>
                  <td align="left" width="25%">Spell Dmg:<br/><input type="text" name="spelldmg" size="5" value="<?if(isset($spelldmg)):?><?=$spelldmg?><?else:?>0<?endif;?>"></td>
                  <td align="left" width="25%">Backstab Dmg:<br/><input type="text" name="backstabdmg" size="5" value="<?if(isset($backstabdmg)):?><?=$backstabdmg?><?else:?>0<?endif;?>"></td>
                </tr>
              </table>
            </fieldset>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Base Stats</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">HP:<br/><input type="text" name="hp" size="5" value="<?if(isset($hp)):?><?=$hp?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Mana:<br/><input type="text" name="mana" size="5" value="<?if(isset($mana)):?><?=$mana?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Endurance:<br/><input type="text" name="endur" size="5" value="<?if(isset($endur)):?><?=$endur?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">AC:<br/><input type="text" name="ac" size="5" value="<?if(isset($ac)):?><?=$ac?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Accuracy:<br/><input type="text" name="accuracy" size="5" value="<?if(isset($accuracy)):?><?=$accuracy?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Attack:<br/><input type="text" name="attack" size="5" value="<?if(isset($attack)):?><?=$attack?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
                <td align="left" width="14%">HP Regen:<br/><input type="text" name="regen" size="5" value="<?if(isset($regen)):?><?=$regen?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Mana Regen:<br/><input type="text" name="manaregen" size="5" value="<?if(isset($manaregen)):?><?=$manaregen?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">End Regen:<br/><input type="text" name="enduranceregen" size="5" value="<?if(isset($enduranceregen)):?><?=$enduranceregen?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Haste:<br/><input type="text" name="haste" size="5" value="<?if(isset($haste)):?><?=$haste?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Light:<br/><input type="text" name="light" size="5" value="<?if(isset($light)):?><?=$light?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Stats</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">AGI:<br/><input type="text" name="aagi" size="5" value="<?if(isset($aagi)):?><?=$aagi?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">CHA:<br/><input type="text" name="acha" size="5" value="<?if(isset($acha)):?><?=$acha?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">DEX:<br/><input type="text" name="adex" size="5" value="<?if(isset($adex)):?><?=$adex?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">INT:<br/><input type="text" name="aint" size="5" value="<?if(isset($aint)):?><?=$aint?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">STA:<br/><input type="text" name="asta" size="5" value="<?if(isset($asta)):?><?=$asta?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">STR:<br/><input type="text" name="astr" size="5" value="<?if(isset($astr)):?><?=$astr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">WIS:<br/><input type="text" name="awis" size="5" value="<?if(isset($awis)):?><?=$awis?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
                <td align="left" width="14%">Cold:<br/><input type="text" name="cr" size="5" value="<?if(isset($cr)):?><?=$cr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Disease:<br/><input type="text" name="dr" size="5" value="<?if(isset($dr)):?><?=$dr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Fire:<br/><input type="text" name="fr" size="5" value="<?if(isset($fr)):?><?=$fr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Magic:<br/><input type="text" name="mr" size="5" value="<?if(isset($mr)):?><?=$mr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Poison:<br/><input type="text" name="pr" size="5" value="<?if(isset($pr)):?><?=$pr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Corruption:<br/><input type="text" name="svcorruption" size="5" value="<?if(isset($svcorruption)):?><?=$svcorruption?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Stun:<br/><input type="text" name="stunresist" size="5" value="<?if(isset($stunresist)):?><?=$stunresist?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Heroic Stats</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">Heroic AGI:<br/><input type="text" name="heroic_agi" size="5" value="<?if(isset($heroic_agi)):?><?=$heroic_agi?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic CHA:<br/><input type="text" name="heroic_cha" size="5" value="<?if(isset($heroic_cha)):?><?=$heroic_cha?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic DEX:<br/><input type="text" name="heroic_dex" size="5" value="<?if(isset($heroic_dex)):?><?=$heroic_dex?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic INT:<br/><input type="text" name="heroic_int" size="5" value="<?if(isset($heroic_int)):?><?=$heroic_int?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic STA:<br/><input type="text" name="heroic_sta" size="5" value="<?if(isset($heroic_sta)):?><?=$heroic_sta?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Heroic STR:<br/><input type="text" name="heroic_str" size="5" value="<?if(isset($heroic_str)):?><?=$heroic_str?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Heroic WIS:<br/><input type="text" name="heroic_wis" size="5" value="<?if(isset($heroic_wis)):?><?=$heroic_wis?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
                <td align="left" width="14%">Heroic Cold:<br/><input type="text" name="heroic_cr" size="5" value="<?if(isset($heroic_cr)):?><?=$heroic_cr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic Disease:<br/><input type="text" name="heroic_dr" size="5" value="<?if(isset($heroic_dr)):?><?=$heroic_dr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic Fire:<br/><input type="text" name="heroic_fr" size="5" value="<?if(isset($heroic_fr)):?><?=$heroic_fr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic Magic:<br/><input type="text" name="heroic_mr" size="5" value="<?if(isset($heroic_mr)):?><?=$heroic_mr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Heroic Poison:<br/><input type="text" name="heroic_pr" size="5" value="<?if(isset($heroic_pr)):?><?=$heroic_pr?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Heroic Corruption:<br/><input type="text" name="heroic_svcorrup" size="5" value="<?if(isset($heroic_svcorrup)):?><?=$heroic_svcorrup?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Spell/Ability Stats</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">DMG Shield:<br/><input type="text" name="damageshield" size="5" value="<?if(isset($damageshield)):?><?=$damageshield?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">DoT Shielding:<br/><input type="text" name="dotshielding" size="5" value="<?if(isset($dotshielding)):?><?=$dotshielding?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Shielding:<br/><input type="text" name="shielding" size="5" value="<?if(isset($shielding)):?><?=$shielding?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Spell Shield:<br/><input type="text" name="spellshield" size="5" value="<?if(isset($spellshield)):?><?=$spellshield?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Strikethrough:<br/><input type="text" name="strikethrough" size="5" value="<?if(isset($strikethrough)):?><?=$strikethrough?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Combat Effects:<br/><input type="text" name="combateffects" size="5" value="<?if(isset($combateffects)):?><?=$combateffects?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
                <td align="left" width="14%">Avoidance:<br/><input type="text" name="avoidance" size="5" value="<?if(isset($avoidance)):?><?=$avoidance?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Dmg Shield Mit:<br/><input type="text" name="dsmitigation" size="5" value="<?if(isset($dsmitigation)):?><?=$dsmitigation?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Heal Amt:<br/><input type="text" name="healamt" size="5" value="<?if(isset($healamt)):?><?=$healamt?><?else:?>0<?endif;?>"></td>
                <td align="left" width="15%">Clairvoyance:<br/><input type="text" name="clairvoyance" size="5" value="<?if(isset($clairvoyance)):?><?=$clairvoyance?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Purity:<br/><input type="text" name="purity" size="5" value="<?if(isset($purity)):?><?=$purity?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </fieldset><br/><br/>
          <fieldset>
            <legend><font size="4">Skill Stats</font></legend>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="50%">
                  Skill Mod:<br/>
                  <select class="left" name="skillmodtype">
<?foreach($skilltypes as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($skillmodtype) && $k == $skillmodtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>       
                  </select>
                </td>
                <td align="left" width="50%">Skill Mod Value:<br/><input type="text" name="skillmodvalue" size="5" value="<?if(isset($skillmodvalue)):?><?=$skillmodvalue?><?else:?>0<?endif;?>"></td> 
              </tr>
            </table>
          </fieldset><br/>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Costs</font></strong></legend>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="25%">Price:<br/><input type="text" name="price" size="9" value="<?if(isset($price)):?><?=$price?><?else:?>0<?endif;?>"></td>
              <td align="left" width="25%">Sellrate:<br/><input type="text" name="sellrate" size="9" value="<?if(isset($sellrate)):?><?=$sellrate?><?else:?>1<?endif;?>"></td>
              <td align="left" width="25%">Favor:<br/><input type="text" name="favor" size="9" value="<?if(isset($favor)):?><?=$favor?><?else:?>0<?endif;?>"></td>
              <td align="left" width="25%">Guild Favor:<br/><input type="text" name="guildfavor" size="9" value="<?if(isset($guildfavor)):?><?=$guildfavor?><?else:?>0<?endif;?>"></td>
            </tr>
            <tr>
              <td align="left" width="20%">LDoN Price:<br/><input type="text" name="ldonprice" size="9" value="<?if(isset($ldonprice)):?><?=$ldonprice?><?else:?>0<?endif;?>"></td>
              <td align="left" width="20%">LDoN Sellback:<br/><input type="text" name="ldonsellbackrate" size="9" value="<?if(isset($ldonsellbackrate)):?><?=$ldonsellbackrate?><?else:?>0<?endif;?>"></td> 
              <td align="left" width="20%">
                LDoN Sold:<br/>
                <select name="ldonsold">
                  <option value="0"<?echo (isset($ldonsold) && $ldonsold == 0) ? " selected" : ""?>>No</option>
                  <option value="1"<?echo (isset($ldonsold) && $ldonsold == 1) ? " selected" : ""?>>Yes</option>
                </select>
              </td>
              <td align="left" width="20%">
                LDoN Theme:<br/>
                <select class="left" name="ldontheme">
<?foreach($itemldontheme as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($ldontheme) && $k == $ldontheme) ? " selected" : ""?>><?=$v?></option>
<?endforeach;?>       
                </select>
              </td>
              <td align="left" width="20%">
                Point Type:<br/>
                <select class="left" name="pointtype">
<?foreach($itempointtype as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($pointtype) && $k == $pointtype) ? " selected" : ""?>><?=$v?></option>
<?endforeach;?>
                </select>
              </td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Appearance</font></strong></legend>
		   <table width="100%" border="0" cellpadding="3" cellspacing="0">
		   <? if(!isset($icon)) { $icon = 0;} ?>
		  <td align="left" width="25%"><img id="iconImage" src="icons/item_<?=$icon?>.gif" /><br/></td>
			<td align="left" width="75%"><br/></td>
		  </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="25%">Icon:<br/><input id="iconField" type="text" name="icon" size="9" value="<?=$icon?>" onchange="changeIcon()"></td>
              <td align="left" width="25%">IDFile:<br/><input type="text" name="idfile" size="9" value="<?if(isset($idfile)):?><?=$idfile?><?else:?>IT64<?endif;?>"></td>
              <td align="left" width="25%">Weight:<br/><input type="text" name="weight" size="9" value="<?if(isset($weight)):?><?=$weight?><?else:?>0<?endif;?>"></td>
              <td align="left" width="25%">Color:<br/><input type="text" name="color" size="9" value="<?if(isset($color)):?><?=$color?><?else:?>4278190080<?endif;?>"></td>
            </tr>
          </table>
          <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr>
              <td align="left" width="33%">
                Size:<br/>
                <select class="left" name="size">
<?foreach($itemsize as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($size) && $k == $size) ? " selected" : ""?>><?=$v?></option>
<?endforeach;?>
                </select>
              </td>
              <td align="left" width="33%">
                Material:<br/>
                <select class="left" name="material">
<?foreach($itemmaterial as $k => $v):?>
                  <option value="<?=$k?>"<? echo (isset($material) && $k == $material) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                </select>
              </td>
              <td align="left" width="33%">Elite Material:<br/><input type="text" name="elitematerial" size="9" value="<?if(isset($elitematerial)):?><?=$elitematerial?><?else:?>0<?endif;?>"></td>
            </tr>
          </table>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Spells</font></strong></legend>
          (<a href="javascript:showSearch();">Spell Search</a>)<br/><br/>
          <center>
            <iframe id='searchframe' src='templates/iframes/spellsearch.php'></iframe>
            <input id="button" type="button" value='Hide Spell Search' onclick='hideSearch();' style='display:none; margin-bottom: 20px;'>
          </center>
          <center>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
               <td align="left" width="25%">Casttime:<br/><input type="text" name="casttime" size="9" value="<?if(isset($casttime)):?><?=$casttime?><?else:?>0<?endif;?>"></td>
               <td align="left" width="25%">Casttime_:<br/><input type="text" name="casttime_" size="9" value="<?if(isset($casttime_)):?><?=$casttime_?><?else:?>0<?endif;?>"></td>
               <td align="left" width="25%">Recast Delay:<br/><input type="text" name="recastdelay" size="9" value="<?if(isset($recastdelay)):?><?=$recastdelay?><?else:?>0<?endif;?>"></td>
               <td align="left" width="25%">Recast Type:<br/><input type="text" name="recasttype" size="9" value="<?if(isset($recasttype)):?><?=$recasttype?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="14%">
                  Click Type:<br/>
                  <select class="left" name="clicktype">
<?foreach($itemcasttype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($clicktype) && $k == $clicktype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="14%">Click Effect:<br/><input type="text" name="clickeffect" size="5" value="<?if(isset($clickeffect)):?><?=$clickeffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="14%">Click Level:<br/><input type="text" name="clicklevel" size="5" value="<?if(isset($clicklevel)):?><?=$clicklevel?><?else:?>0<?endif;?>"></td>
                <td align="left" width="14%">Click Level 2:<br/><input type="text" name="clicklevel2" size="5" value="<?if(isset($clicklevel2)):?><?=$clicklevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="20%">Click Name:<br/><input type="text" name="clickname" size="17" value="<?if(isset($clickname)):?><?=$clickname?><?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="20%">
                  Proc Type:<br/>
                  <select class="left" name="proctype">
<?foreach($proccasttype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($proctype) && $k == $proctype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="16%">Proc Effect:<br/><input type="text" name="proceffect" size="5" value="<?if(isset($proceffect)):?><?=$proceffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="16%">Proc Level:<br/><input type="text" name="proclevel" size="5" value="<?if(isset($proclevel)):?><?=$proclevel?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Proc Level 2:<br/><input type="text" name="proclevel2" size="5" value="<?if(isset($proclevel2)):?><?=$proclevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Proc Rate:<br/><input type="text" name="procrate" size="5" value="<?if(isset($procrate)):?><?=$procrate?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Proc Name:<br/><input type="text" name="procname" size="17" value="<?if(isset($procname)):?><?=$procname?><?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="20%">
                  Worn Type:<br/>
                  <select class="left" name="worntype">
<?foreach($worncasttype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($worntype) && $k == $worntype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="16%">Worn Effect:<br/><input type="text" name="worneffect" size="5" value="<?if(isset($worneffect)):?><?=$worneffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="16%">Worn Level:<br/><input type="text" name="wornlevel" size="5" value="<?if(isset($wornlevel)):?><?=$wornlevel?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Worn Level 2:<br/><input type="text" name="wornlevel2" size="5" value="<?if(isset($wornlevel2)):?><?=$wornlevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">&nbsp;</td>
                <td align="left" width="16%">Worn Name:<br/><input type="text" name="wornname" size="17" value="<?if(isset($wornname)):?><?=$wornname?><?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="20%">
                  Focus Type:<br/>
                  <select class="left" name="focustype">
<?foreach($focuscasttype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($focustype) && $k == $focustype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="16%">Focus Effect:<br/><input type="text" name="focuseffect" size="5" value="<?if(isset($focuseffect)):?><?=$focuseffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="16%">Focus Level:<br/><input type="text" name="focuslevel" size="5" value="<?if(isset($focuslevel)):?><?=$focuslevel?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Focus Level 2:<br/><input type="text" name="focuslevel2" size="5" value="<?if(isset($focuslevel2)):?><?=$focuslevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">&nbsp;</td>
                <td align="left" width="16%">Focus Name:<br/><input type="text" name="focusname" size="17" value="<?if(isset($focusname)):?><?=$focusname?><?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="20%">
                  Scroll Type:<br/>
                  <select class="left" name="scrolltype">
<?foreach($scrollcasttype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($scrolltype) && $k == $scrolltype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="16%">Scroll Effect:<br/><input type="text" name="scrolleffect" size="5" value="<?if(isset($scrolleffect)):?><?=$scrolleffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="16%">Scroll Level:<br/><input type="text" name="scrolllevel" size="5" value="<?if(isset($scrolllevel)):?><?=$scrolllevel?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Scroll Level 2:<br/><input type="text" name="scrolllevel2" size="5" value="<?if(isset($scrolllevel2)):?><?=$scrolllevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">&nbsp;</td>
                <td align="left" width="16%">Scroll Name:<br/><input type="text" name="scrollname" size="17" value="<?if(isset($scrollname)):?><?=$scrollname?><?endif;?>"></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="20%">
                  Bard Type:<br/>
                  <select class="left" name="bardtype">
<?foreach($itembardtype as $k => $v):?>
                    <option value="<?=$k?>"<? echo (isset($bardtype) && $k == $bardtype) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="16%">Bard Effect:<br/><input type="text" name="bardeffect" size="5" value="<?if(isset($bardeffect)):?><?=$bardeffect?><?else:?>-1<?endif;?>"></td>
                <td align="left" width="16%">Bard Level:<br/><input type="text" name="bardlevel" size="5" value="<?if(isset($bardeffect)):?><?=$bardeffect?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Bard Level 2:<br/><input type="text" name="bardlevel2" size="5" value="<?if(isset($bardlevel2)):?><?=$bardlevel2?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Bard Value:<br/><input type="text" name="bardvalue" size="5" value="<?if(isset($bardvalue)):?><?=$bardvalue?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">Bard Name:<br/><input type="text" name="bardname" size="17" value="<?if(isset($bardname)):?><?=$bardname?><?endif;?>"></td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Augment</font></strong></legend>
          <center>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="16%">Slot 1 Type:<br/><input type="text" name="augslot1type" size="5" value="<?if(isset($augslot1type)):?><?=$augslot1type?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">
                  Slot 1 Visible:<br/>
                  <select name="augslot1visible">
                    <option value="0"<?echo (isset($augslot1visible) && $augslot1visible == 0) ? " selected" : ""?>>No</option>
                    <option value="1"<?echo (isset($augslot1visible) && $augslot1visible == 1) ? " selected" : ""?>>Yes</option>
                  </select>
                </td>
                <td align="left" width="16%">Slot 2 Type:<br/><input type="text" name="augslot2type" size="5" value="<?if(isset($augslot2type)):?><?=$augslot2type?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">
                  Slot 2 Visible:<br/>
                  <select name="augslot2visible">
                    <option value="0"<?echo (isset($augslot2visible) && $augslot2visible == 0) ? " selected" : ""?>>No</option>
                    <option value="1"<?echo (isset($augslot2visible) && $augslot2visible == 1) ? " selected" : ""?>>Yes</option>
                  </select>
                </td>
                <td align="left" width="16%">Slot 3 Type:<br/><input type="text" name="augslot3type" size="5" value="<?if(isset($augslot3type)):?><?=$augslot3type?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">
                  Slot 3 Visible:<br/>
                  <select name="augslot3visible">
                    <option value="0"<?echo (isset($augslot3visible) && $augslot3visible == 0) ? " selected" : ""?>>No</option>
                    <option value="1"<?echo (isset($augslot3visible) && $augslot3visible == 1) ? " selected" : ""?>>Yes</option>
                  </select>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="16%">Slot 4 Type:<br/><input type="text" name="augslot4type" size="5" value="<?if(isset($augslot4type)):?><?=$augslot4type?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">
                  Slot 4 Visible:<br/>
                  <select name="augslot4visible">
                    <option value="0"<?echo (isset($augslot4visible) && $augslot4visible == 0) ? " selected" : ""?>>No</option>
                    <option value="1"<?echo (isset($augslot4visible) && $augslot4visible == 1) ? " selected" : ""?>>Yes</option>
                  </select>
                </td>
                <td align="left" width="16%">Slot 5 Type:<br/><input type="text" name="augslot5type" size="5" value="<?if(isset($augslot5type)):?><?=$augslot5type?><?else:?>0<?endif;?>"></td>
                <td align="left" width="16%">
                  Slot 5 Visible:<br/>
                  <select name="augslot5visible">
                    <option value="0"<?echo (isset($augslot5visible) && $augslot5visible == 0) ? " selected" : ""?>>No</option>
                    <option value="1"<?echo (isset($augslot5visible) && $augslot5visible == 1) ? " selected" : ""?>>Yes</option>
                  </select>
                </td>
              </tr>
            </table><br/>
            <fieldset>
              <table width="100%" border="0" cellpadding="3" cellspacing="0">
                <tr>
                  <td align="left" width="50%">
                    Augment Restrictions:<br/>
                    <select class="left" name="augrestrict">
<?foreach($itemsaugrestrict as $k => $v):?>
                      <option value="<?=$k?>"<? echo (isset($augrestrict) && $k == $augrestrict) ? " selected" : ""?>><?=$k?>: <?=$v?></option>
<?endforeach;?>
                    </select>
                  </td>
                  <td align="left" width="50%">Augment Distiller:<br/><input type="text" name="augdistiller" size="5" value="<?if(isset($augdistiller)):?><?=$augdistiller?><?else:?>0<?endif;?>"></td>
                </tr>
              </table>
              <table cellpadding="20px">
                <tr>
                  <td valign="top" align="left">Type:<br/>
                    <input type="checkbox" name="augtype_Type_1" value="1" <?echo (isset($augtype) && $augtype & 1) ? "checked" : ""?>> Type 1<br/>
                    <input type="checkbox" name="augtype_Type_2" value="2" <?echo (isset($augtype) && $augtype & 2) ? "checked" : ""?>> Type 2<br/>
                    <input type="checkbox" name="augtype_Type_3" value="4" <?echo (isset($augtype) && $augtype & 4) ? "checked" : ""?>> Type 3<br/>
                    <input type="checkbox" name="augtype_Type_4" value="8" <?echo (isset($augtype) && $augtype & 8) ? "checked" : ""?>> Type 4<br/>
                    <input type="checkbox" name="augtype_Type_5" value="16" <?echo (isset($augtype) && $augtype & 16) ? "checked" : ""?>> Type 5<br/>
                    <input type="checkbox" name="augtype_Type_6" value="32" <?echo (isset($augtype) && $augtype & 32) ? "checked" : ""?>> Type 6<br/>
                  </td>
                  <td valign="top" align="left"><br/>
                    <input type="checkbox" name="augtype_Type_7" value="64" <?echo (isset($augtype) && $augtype & 64) ? "checked" : ""?>> Type 7<br/>
                    <input type="checkbox" name="augtype_Type_8" value="128" <?echo (isset($augtype) && $augtype & 128) ? "checked" : ""?>> Type 8<br/>
                    <input type="checkbox" name="augtype_Type_9" value="256" <?echo (isset($augtype) && $augtype & 256) ? "checked" : ""?>> Type 9<br/>
                    <input type="checkbox" name="augtype_Type_10" value="512" <?echo (isset($augtype) && $augtype & 512) ? "checked" : ""?>> Type 10<br/>
                    <input type="checkbox" name="augtype_Type_11" value="1024" <?echo (isset($augtype) && $augtype & 1024) ? "checked" : ""?>> Type 11<br/>
                    <input type="checkbox" name="augtype_Type_12" value="2048" <?echo (isset($augtype) && $augtype & 2048) ? "checked" : ""?>> Type 12<br/>
                  </td>
                  <td valign="top" align="left"><br/>
                    <input type="checkbox" name="augtype_Type_13" value="4096" <?echo (isset($augtype) && $augtype & 4096) ? "checked" : ""?>> Type 13<br/>
                    <input type="checkbox" name="augtype_Type_14" value="8192" <?echo (isset($augtype) && $augtype & 8192) ? "checked" : ""?>> Type 14<br/>
                    <input type="checkbox" name="augtype_Type_15" value="16384" <?echo (isset($augtype) && $augtype & 16384) ? "checked" : ""?>> Type 15<br/>
                    <input type="checkbox" name="augtype_Type_16" value="32768" <?echo (isset($augtype) && $augtype & 32768) ? "checked" : ""?>> Type 16<br/>
                    <input type="checkbox" name="augtype_Type_17" value="65536" <?echo (isset($augtype) && $augtype & 65536) ? "checked" : ""?>> Type 17<br/>
                    <input type="checkbox" name="augtype_Type_18" value="131072" <?echo (isset($augtype) && $augtype & 131072) ? "checked" : ""?>> Type 18<br/>
                  </td>
                  <td valign="top" align="left"><br/>
                    <input type="checkbox" name="augtype_Type_19" value="262144" <?echo (isset($augtype) && $augtype & 262144) ? "checked" : ""?>> Type 19<br/>
                    <input type="checkbox" name="augtype_Type_20" value="524288" <?echo (isset($augtype) && $augtype & 524288) ? "checked" : ""?>> Type 20<br/>
                    <input type="checkbox" name="augtype_Type_21" value="1048576" <?echo (isset($augtype) && $augtype & 1048576) ? "checked" : ""?>> Type 21<br/>
                    <input type="checkbox" name="augtype_Type_22" value="2097152" <?echo (isset($augtype) && $augtype & 2097152) ? "checked" : ""?>> Type 22<br/>
                    <input type="checkbox" name="augtype_Type_23" value="4194304" <?echo (isset($augtype) && $augtype & 4194304) ? "checked" : ""?>> Type 23<br/>
                    <input type="checkbox" name="augtype_Type_24" value="8388608" <?echo (isset($augtype) && $augtype & 8388608) ? "checked" : ""?>> Type 24<br/>
                  </td>
                  <td valign="top" align="left"><br/>
                    <input type="checkbox" name="augtype_Type_25" value="16777216" <?echo (isset($augtype) && $augtype & 16777216) ? "checked" : ""?>> Type 25<br/>
                    <input type="checkbox" name="augtype_Type_26" value="33554432" <?echo (isset($augtype) && $augtype & 33554432) ? "checked" : ""?>> Type 26<br/>
                    <input type="checkbox" name="augtype_Type_27" value="67108864" <?echo (isset($augtype) && $augtype & 67108864) ? "checked" : ""?>> Type 27<br/>
                    <input type="checkbox" name="augtype_Type_28" value="134217728" <?echo (isset($augtype) && $augtype & 134217728) ? "checked" : ""?>> Type 28<br/>
                    <input type="checkbox" name="augtype_Type_29" value="268435456" <?echo (isset($augtype) && $augtype & 268435456) ? "checked" : ""?>> Type 29<br/>
                    <input type="checkbox" name="augtype_Type_30" value="536870912" <?echo (isset($augtype) && $augtype & 536870912) ? "checked" : ""?>> Type 30<br/>
                  </td>
                  <td valign="top" align="left"><br/>
                    <input type="checkbox" name="all_none5" value="yes" onClick="Check5(document.item_edit)"> <b>All/None</b>
                  </td>
                </tr>
              </table>
            </fieldset>
          </center>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Faction</font></strong></legend>
          <center>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="10%">Faction Mod 1:<br/>
                  <select class="left" name="factionmod1">
<?foreach($factions as $faction): extract($faction);?>
                    <option value="<?=$id?>"<? echo (isset($factionmod1) && $id == $factionmod1) ? " selected" : ""?>><?=$name?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="10%">Amt 1:<br/><input type="text" name="factionamt1" size="5" value="<?if(isset($factionamt1)):?><?=$factionamt1?><?else:?>0<?endif;?>"></td>
                <td align="left" width="10%">Faction Mod 2:<br/>
                  <select class="left" name="factionmod2">
<?foreach($factions as $faction): extract($faction);?>
                  <option value="<?=$id?>"<? echo (isset($factionmod2) && $id == $factionmod2) ? " selected" : ""?>><?=$name?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="10%">Amt 2:<br/><input type="text" name="factionamt2" size="5" value="<?if(isset($factionamt2)):?><?=$factionamt2?><?else:?>0<?endif;?>"></td>
              </tr>
              <tr>
                <td align="left" width="10%">Faction Mod 3:<br/>
                  <select class="left" name="factionmod3">
<?foreach($factions as $faction): extract($faction);?>
                    <option value="<?=$id?>"<? echo (isset($factionmod3) && $id == $factionmod3) ? " selected" : ""?>><?=$name?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="10%">Amt 3:<br/><input type="text" name="factionamt3" size="5" value="<?if(isset($factionamt3)):?><?=$factionamt3?><?else:?>0<?endif;?>"></td>
                <td align="left" width="10%">Faction Mod 4:<br/>
                  <select class="left" name="factionmod4">
<?foreach($factions as $faction): extract($faction);?>
                    <option value="<?=$id?>"<? echo (isset($factionmod4) && $id == $factionmod4) ? " selected" : ""?>><?=$name?></option>
<?endforeach;?>
                  </select>
                </td>
                <td align="left" width="10%">Amt 4:<br/><input type="text" name="factionamt4" size="5" value="<?if(isset($factionamt4)):?><?=$factionamt4?><?else:?>0<?endif;?>"></td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <fieldset>
          <legend><strong><font size="4">Verification</font></strong></legend>
          <center>
            <table width="100%" border="0" cellpadding="3" cellspacing="0">
              <tr>
                <td align="left" width="25%">Created:<br/><input type="text" name="created" size="20" value="<?=$year?><?=$mon?><?=$mday?><?=$hours?><?=$minutes?><?=$seconds?>"></td>
                <td align="left" width="25%">Verified:<br/><input type="text" name="verified" size="20" value="<?=$year?>-<?=$mon?>-<?=$mday?> <?=$hours?>:<?=$minutes?>:<?=$seconds?>"></td>
                <td align="left" width="25%">Updated:<br/><input type="text" name="updated" size="20" value="<?=$year?>-<?=$mon?>-<?=$mday?> <?=$hours?>:<?=$minutes?>:<?=$seconds?>"></td>
                <td align="left" width="25%">Source:<br/><input type="text" name="source" size="20" value="CUSTOM"></td>
              </tr>
              <tr>
                <td align="left" width="25%">Comment:<br/><input type="text" name="comment" size="20" value=""></td>
              </tr>
            </table>
          </center>
        </fieldset><br/>
        <center>
          <input type="submit" value="Create Tiered Items">
        </center>
      </div>
    </div>
  </form>
