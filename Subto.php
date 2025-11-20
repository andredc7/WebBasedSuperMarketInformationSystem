<?php
include 'connect.php';
$nam = '';
$jum = 1;
$har = 0;
$s1 =0;
$s = mysqli_query($con,"Select Subtotal from ndetrans ");
while($row=mysqli_fetch_array($s))
{
  $s1+=$row['Subtotal'];
}

?>
<h3>Sub total = <?php echo $s1;?></h3>
