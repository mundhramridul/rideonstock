<?php
session_start();
$con = mysql_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysql_select_db("rideonstock",$con);
$user = $_SESSION['login_user'];
//$user='mridul1';
$query = mysql_query("select * from portfolio where Stock ='jaiprakash' AND Name='$user'");
if ( mysql_num_rows($query) >= 1 )
   {
  echo('Stock Already in Watchlist');
  
   }
 else
 { $result= mysql_query("INSERT INTO portfolio (Name,Stock)VALUES('$user','jaiprakash')",$con) or die(mysql_error());
 echo('ADDED TO WATCHLIST');
 
 }
 ?>

<html>
    <script>
        setTimeout(window.parent.Shadowbox.close, 2000);
    </script>
    <body bgcolor="#ffffff">
    </body>
</html>