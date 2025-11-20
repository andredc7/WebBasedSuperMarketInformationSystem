<?php
session_start();
include 'connect.php';
$nam = '';
$jum = 0;
$har = 0;

$s = mysqli_query($con,"select * from ndetrans where IDu = '".$_SESSION['uname']."'");
$s1 = mysqli_query($con,"select * from barong");
while($row=mysqli_fetch_array($s1))
{
  $s = mysqli_query($con,"select * from ndetrans where Nama = '".$row['ID']."' and IDu = '".$_SESSION['uname']."'");
  $ha =0;
  $jum=0;

  while($row1=mysqli_fetch_array($s))
  {

    $ha+=$row1['Subtotal'];
    $jum+=$row1['Jumlah'];
    $har+=$row1['Subtotal'];
    $nam = $row1['IDTrans'];
    $sql = "insert into detrans values (NULL,'".$row['ID']."',".$jum.",".$ha.",'".$nam."') ";
    mysqli_query($con,$sql);
    $s11 = mysqli_query($con,"select * from barong where ID = '".$row['ID']."'");
    $kode2=mysqli_fetch_assoc($s11);
    $s12 = $kode2['Jumlah'];
    $s13 = $s12 -$row1['Jumlah'];
    mysqli_query($con,"UPDATE barong SET Jumlah = ".$s13." where ID ='".$row['ID']."' ");

  }

}
$sql = "insert into transaksi values ('".$nam."',".$har.",'".date("Y.m.d")."','".$_SESSION['uname']."') ";
mysqli_query($con,$sql);
echo "<script>alert('Transaksi berhasil UY');</script>";
$s = mysqli_query($con,"Delete from ndetrans where IDu = '".$_SESSION['uname']."'");


?>
