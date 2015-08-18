<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Feedback Form</title>	

    <script type="text/javascript">
function myFunction()
{
        setTimeout(window.parent.Shadowbox.close,100);
}
</script>
<script type="text/javascript">
function phonenumber(inputtxt)  
{  
  var phoneno = /^\d{10}$/;
return phoneno.test(inputtxt);  
  //if((inputtxt.value.match(phoneno))  
    //    {  
      //return true;  
        //}  
      //else  
        //{  
        //alert("message");  
        //return false;  
        //}  
}        
        
function validateForm()
{
var x=document.getElementById("email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
var contact1=document.getElementById("contact");
if(contact1.value == "")
{
alert("enter phone number");
return false;
}
 
if(contact1.value != "") 
{
      if(!phonenumber(contact1.value)) {
        alert("phone number is not valid!");
        contact1.focus();
        return false;
}
}  
var y=document.getElementById("comment").value;
if (y==null || y=="")
  {
  alert("Please enter comment!!");
  return false;
  }
}



</script>
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

</head>
<body background="bg2.jpg">
<div align="right">
<button onclick="myFunction();">CLOSE</button>
</div>
<h1 align="center"><font color="RED">Send Us Your Feedback!</font></h1>
<form action="insert1.php" method="post" onsubmit="return validateForm();">
<table>
<tr>
<td>Email Address:</td>
<td>
<input type="text" name="email" id="email" value="" maxlength="100" />
</td>
</tr>
<td>Contact Number:</td>
<td>
<input type="text" name="contact" id="contact" />
</td>
</tr>
<tr>
<td>Comments:</td>
<td>
<textarea rows="10" cols="50" name="comment" id="comment"></textarea>
</td>
</tr>
<tr><td>&nbsp;</td>
<td>
<input type="submit" value="Submit" />
</td>
</tr>
</table>
</form>
</body>
</html>