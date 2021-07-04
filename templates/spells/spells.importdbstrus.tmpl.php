  <table class="edit_form" cellpadding="0" cellspacing="0" width="300px">
    <tr>
      <td class="edit_form_header">Generate DBSTR_US File</td>
    </tr>
    <tr>
      <td class="edit_form_content">
<?if ($response['success']):?>
        <b>DBSTR_US Imported:</b> Successful!<br>
<?else:?>
        <center><img src="images/caution.gif"> <b>Failed to export spells into <?=$response['spellsfile']?></b> <img src="images/caution.gif"></center>
<?endif;?>
      </td>
    </tr>
  </table>
