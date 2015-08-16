<?php
session_start();
if (isset($_SESSION['login_user']))
{
if(session_destroy())
{
header("Location: minor.php");
}
}
?>