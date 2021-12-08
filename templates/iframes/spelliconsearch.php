<html>
<body bgcolor="#FFCCCC">
<?php
require("../../config.php");
$dirname = "../../icons_new/";
$row = 0;

for ($x = 1; $x <= 2243; $x++) {
	if ($row <= 9) {
		echo '<a href="javascript:parent.changeSpellIconValue('.$x.')";><img src="'.$dirname.$x.'.png" title="'.$x.'" style="padding: 1px;"/></a>';
		$row = $row + 1;		
	} else {
		echo '<br /><a href="javascript:parent.changeSpellIconValue('.$x.')";><img src="'.$dirname.$x.'.png" title="'.$x.'" style="padding: 1px;"/></a>';
		$row = 1;
	}
}
?>
</html>