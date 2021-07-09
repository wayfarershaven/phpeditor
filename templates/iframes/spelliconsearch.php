<html>
<body bgcolor="#FFCCCC">
<?php
require("../../config.php");
$dirname = "../../icons/";
$row = 0;

for ($x = 1; $x <= 216; $x++) {
	if ($row <= 9) {
		echo '<a href="javascript:parent.changeSpellIconValue('.$x.')";><img src="'.$dirname.$x.'.gif" title="'.$x.'" style="padding: 1px;"/></a>';
		$row = $row + 1;		
	} else {
		echo '<br /><a href="javascript:parent.changeSpellIconValue('.$x.')";><img src="'.$dirname.$x.'.gif" title="'.$x.'" style="padding: 1px;"/></a>';
		$row = 1;
	}
}
?>
</html>