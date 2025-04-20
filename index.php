<?php
session_start();
if(isset($_POST['btn'])){
    $usn=$_POST['usn'];
    $pswd=$_POST['pswd'];
    $_SESSION['username']=$usn;
    $_SESSION['pswd']=$pswd;
    header("location:welcome.php");

}
?>
<html>
<head>
    <title>contact form</title>
</head>

<body>
  <form action=""   method="POST">  
  <h2>login</h2>

  username&nbsp&nbsp<input type="text" name="usn" required>>
  <br>
  password &nbsp<input type="password" name="pswd"required><br>
  <input type="submit" name="btn" value="login">
</form>
  </body>
</html>
