<?php
include 'connect.php';
$nam = '';
$s2 = "";
$s3 = 0;
$s4 = "";
$s5 = "";
$s6 = "";
$s1 = mysqli_query($con,"Select * from detail_restock where ID_Detail = '".$_POST['idx']."'");
while($row = mysqli_fetch_array($s1))
{
  $s2 = $row['ID_Detail'];
  $s3 = $row['Jumlah'];
  $s4 = $row['Status'];
  $s5 = $row['ID_Supplyer'];
  $s6 = $row['ID_Barang'];
}
?>
<div class="card" style="width: 18rem;">
  <div class="card-header">
detail restock
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID_Restok : <?php echo $s2;?></li>
    <li class="list-group-item">Jumlah : <?php echo $s3;?> </li>
    <li class="list-group-item">Status : <?php echo $s4;?> </li>
    <li class="list-group-item">ID_Supplyer : <?php echo $s5;?> </li>
    <li class="list-group-item">ID_Barang : <?php echo $s6;?> </li>
  </ul>
</div>
