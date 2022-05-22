<?php
    session_start();
    $_SESSION['Basic']=$_POST['Basic'];
    $_SESSION['DA']=$_POST['DA'];
    $_SESSION['HRA']=$_POST['HRA'];
    $total=$_SESSION['Basic']+($_SESSION['Basic']*$_SESSION['DA']/100)+($_SESSION['Basic']*$_SESSION['HRA']/100);

    echo $_SESSION['eno']."<br>".$_SESSION['ename']."<br>".$_SESSION['eadd']."<br>".$_SESSION['Basic']."<br>".$_SESSION['DA']."<br>".$_SESSION['HRA']."<br>".$total;
    session_destroy();
?>