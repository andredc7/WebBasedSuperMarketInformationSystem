<?php
session_start();


  if(isset($_POST['submit']))
  {
    $con = mysqli_connect('localhost','m26416068','tos2018','m26416068');
    $you = mysqli_query($con,"SELECT * from staf where Password ='".$_POST['psw']."' and ID ='".$_POST['uname']."'");
    while($row = mysqli_fetch_array($you))
    {

       if($row['ID']== $_POST['uname'] && $row['Password']==$_POST['psw'])
       {
        $_SESSION['uname'] = $row['ID'];
            if (substr($_POST['uname'],0,2)=="ST")
            {
                echo "<script>window.location.href='mulek1.php';</script>";
            }
            else if (substr($_POST['uname'],0,2)=="MG")
            {
                echo "<script>window.location.href='MANAGER.php';</script>";
            }
            else {
              echo "<script>window.location.href='Admin1.php';</script>";
            }
        }

     }
     echo "<script>window.location.href='fail1.php';</script>";
   }

?>
