
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Portfolio</title>
<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:18px;

}
label
{
font-weight:bold;

width:100px;
font-size:18px;

}
.box
{
border:#666666 solid 1px;

}
</style>
<script type="text/javascript">
function myFunction()
{
        setTimeout(window.parent.Shadowbox.close,100);
}
</script>
</head>
<body background="bg2.jpg">
<div align="right">
<button onclick="myFunction()">CLOSE</button>
</div>
<div align="center" style=" margin-top:40px">
<div style="width:350px; border: solid 1px #333333; " align="left">
<div style="background-color:#ff0000 ; color:#000000; padding:3px;"><b>Watchlist</b></div>
<div style="margin:30px ">
<body>


<?php
session_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('could not connect'.mysql_error());
}

mysql_select_db("rideonstock",$con);
$user = $_SESSION['login_user'];
$result=mysql_query("SELECT Stock FROM portfolio WHERE Name='$user'",$con) or die(mysql_error());



while($row =mysql_fetch_array($result))
{  $company =$row['Stock'];
    $result2=mysql_query("SELECT Name FROM company_name
    WHERE link='$company'",$con) or die(mysql_error());
$row2 = mysql_fetch_array($result2);
echo $row2['Name'];
echo " ";
$result1=mysql_query('SELECT Price FROM '.$company.'
    WHERE Time=
      (SELECT max(Time)
      FROM '.$company.'
      WHERE Date=(SELECT max(Date)
    FROM '.$company.' ))
       AND Date=
      (SELECT max(Date)
       FROM '.$company.')',$con) or die(mysql_error());
$row1 = mysql_fetch_array($result1);
echo $row1['Price'];
echo "<br>";
}



mysql_close($con);
?>

</div
</div>
</div>
</body>
</html>
         
