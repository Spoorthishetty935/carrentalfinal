<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.php");
    exit;
}
if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    
<head><title>welcome</title>
</head>
<body>
    <?php
$_SESSION["validuser"]="Admin";
$_SESSION["validpswd"]="abc@12";
if(($_SESSION['username']==$_SESSION['validuser']) and ($_SESSION['pswd']==$_SESSION["validpswd"]))
{

    echo"<h2>welcome.".$_SESSION['username']."</h2>";
    echo"<h4>this is secure are you are logged djff</h4>";
    echo"<a href='welcome.php?logout=true'>logout</a>";

}
else{
    echo"<script>alert('invalid user');
    window.location.href='index.php';</script>";

}
?>
<body>


</html>