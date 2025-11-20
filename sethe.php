<?php
session_start();
include 'connect.php';
$nam = '';
$jum = 1;
$har = 0;
$s = mysqli_query($con,"Delete from ndetrans where IDu = '".$_SESSION['uname']."'");


?>
