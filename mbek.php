<?php
include 'connect.php';
session_start();
$nam = '';
$jum = 0;
$har = 0;
$a =$_POST['nota'];
$s = mysqli_query($con,"select * from barong where ID = '".$_POST['idx']."' ");
$ju =0;

while($row=mysqli_fetch_array($s))
{
  // $f = mysqli_query($con,"select * from ndetrans");
  // while($row1=mysqli_fetch_array($f))
  // {
  //   if($row1['Nama']==$row['ID'])
  //   {
  //     $har = $row1['Jumlah'] + $_POST['jum'];
  //     $sql = "update ndetrans set Jumlah = ".$har." where Nama = '".$row1['Nama']."'";
  //     mysqli_query($con,$sql);
  //   }
  //   else {
  //     $nam = $row['Nama'];
  //     // $jum = $row['jumlah'];
  //     $har = $row['Hargajual'];
  //     $sql = "insert into ndetrans values (NULL,'".$_POST['idx']."',1,".$row['Hargajual'].",'".$a."') ";
  //     mysqli_query($con,$sql);
  //   }
  // }
  // $kode1=mysqli_query($con,"select * from ndetrans where id = '".$_POST['idx']."' ");
  // $kode2=mysqli_fetch_assoc($kode1);
  // $kode1=$kode2['Jumlah'];

    // $kode1=mysqli_query($con,"select * from ndetrans where id = '".$_POST['idx']."' ");
    // $kode2=mysqli_fetch_assoc($kode1);
    // $kode1=$kode2['Jumlah'];
    // $har = $kode1 + $_POST['jum'];
    // $sql = "update ndetrans set Jumlah = ".$har." where Nama = '".$_POST['idx']."'";
    // mysqli_query($con,$sql);
    $kode1=mysqli_query($con,"select * from ndetrans where Nama = '".$_POST['idx']."' and IDu = '".$_SESSION['uname']."'");
    $k = mysqli_num_rows($kode1);

    if($k==0)
    {
      $nam = $row['Nama'];
         // $jum = $row['jumlah'];
         $har = $row['Hargajual'] * $_POST['jum'];
      $sql = "insert into ndetrans values (NULL,'".$_POST['idx']."',".$_POST['jum'].",".$har.",'".$a."','".$_SESSION['uname']."' ) ";
      mysqli_query($con,$sql);
    }
    else {
      $kode2=mysqli_fetch_assoc($kode1);
      $al = $kode2['Jumlah'];
      $nam = $row['Nama'];
         // $jum = $row['jumlah'];
      $har = $row['Hargajual'] * ($_POST['jum']+ $al);
      $al = $al +$_POST['jum'];
      $sql = "update ndetrans set Jumlah = ".$al." ,Subtotal = '".$har."' where Nama = '".$_POST['idx']."' and IDu = '".$_SESSION['uname']."'";
      mysqli_query($con,$sql);

    }


}
$f = mysqli_query($con,"select * from ndetrans where IDu = '".$_SESSION['uname']."'");
while($row=mysqli_fetch_array($f))
{
  $jum+=1;
}
?>
<h3></h3>
<div class="card" style="width: 18rem;">
  <div class="card-header">
detail transaksi
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Jumlah Barang: <?php echo $jum;  ?></li>
    <li class="list-group-item">Subtotal : <?php echo $har;?></li>
    <li class="list-group-item">Total : <?php
    include 'connect.php';
    $nam = '';
    $jum = 1;
    $har = 0;
    $s1 =0;
    $s = mysqli_query($con,"Select Subtotal from ndetrans where IDu = '".$_SESSION['uname']."'");
    while($row=mysqli_fetch_array($s))
    {
      $s1+=$row['Subtotal'];
    }
       echo $s1;
    ?>
</li>
  </ul>
</div>
