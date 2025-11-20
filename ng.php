<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <head>
    <style>
    .ignielPelangi {
    background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
    background-size: 500% 500%;
    -webkit-animation: ignielGradient 12s ease infinite;
    -moz-animation: ignielGradient 12s ease infinite;
    animation: ignielGradient 12s ease infinite;
}
@-webkit-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
    </style>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ignielPelangi">

<h2>Login Form</h2>

  <div class="container">
    <form  method="POST" action="mulek.php">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">

    <button type="submit" name="submit">Login</button>
    </form>
  </div>

</body>
</html>
