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
$email=$_POST['email'];
$contact=$_POST['contact'];
$comment=$_POST['comment'];
// Insert data into mysql 
$sql="INSERT INTO feed (email,contact,comment) VALUES ('$email','$contact','$comment')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result)
{
echo "Thanks for donating your valuable time";
}

else {
echo "ERROR";
}
?> 
<html>
<head>
<!--<meta http-equiv="refresh" content="2;URL=minor.php">-->
<script type="text/javascript">
alert("Thanks for donating your valuable time");
</script>
</head>
<body onload="window.parent.Shadowbox.close();">
</body>
</html>