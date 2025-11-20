<?php
include 'connect.php';
$nam = '';
$jum = 1;
$har = 0;
$s2 = "";
$s1 = mysqli_query($con,"Select * from supplyer where Nama = '".$_POST['idx']."'");
while($row = mysqli_fetch_array($s1))
{
  $s2 = $row['ID_Sup'];
}
mysqli_query($con,"Insert into detail_restock values('".$_POST['nota']."',".$_POST['jum'].",'Pending','".$s2."','".$_POST['idx']."',NULL)");
echo "<script>alert('Re-Stok Req berhasil UY');</script>";

?>
