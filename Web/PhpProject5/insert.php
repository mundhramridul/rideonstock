<?php

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("rideonstock",$con);

// Get values from form 
$tuser=$_POST['tuser'];
$tpass=$_POST['pass1'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['date1'];
// Insert data into mysql 
$sql="INSERT INTO member (tuser, tpass, gender, email, dob)VALUES('$tuser', '$tpass', '$gender', '$email', '$dob')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
header("location:final1.php");
}

else {
echo "ERROR";
}
?> 
<html>
<head>
</head>
<body bgcolor="#ffffff">
</body>
</html>