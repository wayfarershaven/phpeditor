<html>
<body bgcolor="#FFCCCC">
<?php
require("../../config.php");
$dirname = "../../icons/item_";
$row = 0;

for ($x = 500; $x <= 7267; $x++) {
	if ($row <= 9) {
		echo '<a href="javascript:parent.changeIconValue('.$x.')";><img src="'.$dirname.$x.'.gif" title="'.$x.'"/></a>';
		$row = $row + 1;		
	} else {
		echo '<br /><a href="javascript:parent.changeIconValue('.$x.')";><img src="'.$dirname.$x.'.gif" title="'.$x.'"/></a>';
		$row = 1;
	}
}
?>
</html>