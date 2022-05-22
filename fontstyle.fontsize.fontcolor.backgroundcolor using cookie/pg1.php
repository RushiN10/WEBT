<?php
echo "style is ".$_POST['fstyle']."<br>color is ".$_POST['fcolor']."<br>Background color is ".$_POST['bcolor']."<br>size is ".$_POST['fsize'];

setcookie("set1",$_POST['fstyle'],time()+3600);
setcookie("set2",$_POST['fcolor'],time()+3600);
setcookie("set3",$_POST['bcolor'],time()+3600);
setcookie("set4",$_POST['fsize'],time()+3600);
?>
<html>
<body>
<form action="display.php">
<input type = "submit"  value = "OK">
</form>
</body>
</html>

