<?php
session_start();
include 'connect.php';
$nam = '';
$jum = 1;
$har = 0;
$s2 = "";
$s3 ="";

$s1 = mysqli_query($con,"Select * from detail_restock where ID = '".$_POST['idx']."'");
while($row = mysqli_fetch_array($s1))
{
  $s2 = $row['ID_Detail'];
  $s3 = $row['ID_Barang'];
  $jum= $row['Jumlah'];
}
$s5 = mysqli_query($con,"Select * from transaksi where IDTrans = '".$s2."'");
$s4 = mysqli_num_rows($s5);
$s6 = mysqli_query($con,"Select * from barong where ID = '".$s3."'");
$s7 ="";
$s9 =0;
while($row = mysqli_fetch_array($s6))
{
  $s7 = $row['Hargabeli'];
  $s9 = $row['Jumlah'];
}
$s8 = $s7 * $jum;
$s10 = $s9 + $jum;
mysqli_query($con,"UPDATE detail_restock SET Status='Completed' where ID ='".$_POST['idx']."' ");
// if($s4 ==0)
// {

$sql = "insert into transaksi values ('".$s2."',".$s8.",'".date("Y.m.d")."','".$_SESSION['uname']."') ";
mysqli_query($con,$sql);
mysqli_query($con,"UPDATE barong SET Jumlah = ".$s10." where ID ='".$s3."' ");
echo "<script>alert('Restock Berhasil');</script>";
// }
// else {
//
// $totals =0;
//   while($row = mysqli_fetch_array($s5))
//   {
//     $totals+=$row['Total'];
//   }
//   $totals+= $s8;
//     mysqli_query($con,"UPDATE transaksi SET Total=$totals where ID ='".$s2."' ");
// }



?>
