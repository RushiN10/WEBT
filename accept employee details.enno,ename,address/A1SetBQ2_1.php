<html>
<body>
<form action="A1SetBQ2_2.php" method="POST">
<?php
    session_start();
    $_SESSION['eno']=$_POST['eno'];
    $_SESSION['ename']=$_POST['ename'];
    $_SESSION['eadd']=$_POST['eadd'];
?>
<input type="submit" value="submit">
</form>
</body>
</html>
