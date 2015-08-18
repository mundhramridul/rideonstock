<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login page</title>
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
<button onclick="myFunction();">CLOSE</button>
</div>
<div align="center" style=" margin-top:60px">
New to Ride on stock ?<a href="reg.php">Create Account</a>
</div>
<div align="center" style=" margin-top:40px">
<div style="width:350px; border: solid 1px #333333; " align="left">
<div style="background-color:#ff0000 ; color:#000000; padding:3px;"><b>Login</b></div>


<div style="margin:30px ">

<form action="validate.php" method="post">
<label>UserName  :</label><input type="text" name="tuser" class="box"/><br /><br />
<label>Password  :</label><input type="password" name="tpass" class="box" /><br/><br />
<input type="submit" value=" LOGIN "/><br />

</form>
</div>
</div>
</div>
</body>
</html>
