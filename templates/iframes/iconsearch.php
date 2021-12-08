<html>
<body bgcolor="#FFCCCC">
<?php
require("../../config.php");
$dirname = "../../icons_new/item_";
$row = 0;

for ($x = 500; $x <= 11256; $x++) {
	if ($row <= 9) {
		echo '<a href="javascript:parent.changeIconValue('.$x.')";><img src="'.$dirname.$x.'.png" title="'.$x.'"/></a>';
		$row = $row + 1;		
	} else {
		echo '<br /><a href="javascript:parent.changeIconValue('.$x.')";><img src="'.$dirname.$x.'.png" title="'.$x.'"/></a>';
		$row = 1;
	}
}
?>
</html>