<?php
include 'connect.php';
session_start();
$nam = '';
$jum = 1;
$har = 0;
$s = mysqli_query($con,"Delete from ndetrans where ID_Detail = '".$_POST['idx']."' and IDu = '".$_SESSION['uname']."'");


?>
