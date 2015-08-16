<?php
include('config.php');
session_start();
// Grab User submitted information
$username = $_POST["tuser"];
$pass = $_POST["tpass"];


$result = mysql_query("SELECT * FROM member WHERE tuser = '$username' and tpass = '$pass'");

$count = mysql_num_rows($result);

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("email");
$_SESSION['login_user']=$username;
header("location:final1.php");
}
else {
echo "WRONG USERNAME OR PASSWORD";
}
?>
<html>
<head>
<meta http-equiv="refresh" content="2;URL=log.php">
<script>
function myFunction()
{
window.open("log.php");
}
</script>
</head>
<body bgcolor=#ffffff>
</body>
</html>