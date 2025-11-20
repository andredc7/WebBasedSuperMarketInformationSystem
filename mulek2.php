<?php
$con = mysqli_connect('localhost','m26416097','tos2018','m26416097');
$d = $_POST['id'];
echo $d;
$you = mysqli_query($con,"SELECT * from Barong where ID = ".$d."");
echo $you;
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("dmy");
$waktu =  date("His");
$b='';
$c=1;
$a = "in-".$tanggal."-".$waktu."";
while($row = mysqli_fetch_array($you))
{
  mysqli_query($con,"INSERT INTO Detail_Trans(ID_Detail,ID_Barang,Jumlah,Subtotal,IDTrans) VALUES (NULL,'".$row[ID]."',1,'".$row[Hargajual]."','".$a."')");
  $b =$row['Nama'];
  echo $row['ID'];
}

 ?>
<h1>Nama : <?php echo $b;  ?></h1><br>
<h1>Jumlah : <?php echo $c;  ?></h1>
