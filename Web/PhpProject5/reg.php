<html>
<head>
<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:18px;

}
label
{
font-weight:bold;

width:120px;
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

<script>

function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
       
    }
}

function checkPassword(str)
{
 var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;
 return re.test(str);
}

function checkuser(str1)
{
 var re = /^[a-z]\w{5,}$/;
 return re.test(str1);
}  

function checkdob(date5)
{
  var myDate1= date5;

  var today = new Date();
var x = today.getDate();
var y = today.getMonth()+1;
var z = today.getFullYear();
var a = z+"-" + y + "-" + x;
if (myDate1>=a)
  {
  alert("enter the valid date");
  return false;
  }
else
  {
  return true;
  }
}

function validateForm()
{
		//var today1 = new date();
                
		var name=document.forms["registerForm"]["tuser"];
                
		//var date1=document.registerForm.date1.value;
		var group = document.registerForm.gender;
		var date2 = document.getElementById('date1');
                var date3 = date2.value;
                var name1=name.value;
var x=document.forms["registerForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

if(null==name1 || ""==name1)
		{
			alert("Kindly Enter Your Name ");
			
			return false;
		}
		
if(name.value != "") 
{
      if(!checkuser(name.value)) {
        alert("Username should start with a character length should be greater than 5");
        name.focus();
        return false;
}
		
}		
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  if(date2.value=="")
    {
        alert("please enter date");
        return false;
    }
  
if(date2.value!="")
    {
        if(!checkdob(date2.value)) {
        //alert("The dob you have entered is not valid!");
        //date3.focus();
        return false;
    }
    }

 //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
 //Compare the values in the password field 
    //and the confirmation field

if(pass1.value == "")
{
 alert("enter password");
  return false;
}

if(pass1.value != "") 
{
      if(!checkPassword(pass1.value)) {
        alert("The password must include atleast 1 capital character,1 small character and a number and length should be at least 6");
        pass1.focus();
        return false;
}
}


if(pass2.value == "")
{
 alert("enter confirm password");
  return false;
}


      
if(pass1.value == pass2.value)
{
        //The passwords match. 
   
   }else
{
        //The passwords do not match.
	alert("Passwords do not match");
    return false;   
    }


		
//radio button validation
var sex;	
for (var i=0; i<group.length; i++) 
{
if (group[i].checked)
{
 sex=group[i].value;
break;
}
}
if (i==group.length)
{
 alert("No radio button is checked");
return false;
}

		
		myWindow.alert("Welcome "+name1+" , You have been registered");
			
}
	
</script>
<div align="right">
<button onclick="myFunction();">CLOSE</button>
</div>
<div align="center" style=" margin-top:40px">
<div style="width:600px; border: solid 1px #333333; " align="left">



<div id="top" align="center" style="background-color:#ff0000 ; color:#000000; padding:3px;"><strong> Enter the following information: </strong></div>
                
<form name="registerForm" onsubmit="return validateForm()" action="insert.php" method="post">
<table>
<tr>
<td>
<label>USERID:</label>
                    
</td>
<td>
<input type="text" autocomplete="off" name="tuser" id="user_id" class="user_name" />
                    
<span class="check"  ></span>
                
</td>
</tr>
<br/>
<tr>		
<td>
		<label>EMAIL:</label> 
	</td><td>	 <input type="text" name="email"></td>
</tr>	
	

<tr>


<td>	
<label>GENDER:</label>
</td>

<td>
<input type="radio" name="gender" value="male">Male</input>

<input type="radio" name="gender" value="female">Female</input>
</td>

</tr>


<tr>
<td>
<label>
DATE OF BIRTH: 
<label/>
</td>
<td>
<input type="date" name="date1" id="date1">
</td>
</tr>	


<tr>
<td>

<label for="pass1">PASSWORD:</label>
</td>
<td>
<input type="password" name="pass1" id="pass1">
</td>
</tr>
<tr>
<td> 
<label for="pass2">CONFIRM PASSWORD:</label>
</td>
<td>
<input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;"><label id="info" style="color: red; font-style: italic;"></label>
</td>
</tr>
<tr>
<td align="right">
<input type="submit" value="REGISTER">
</td>
</tr>		
	
</table>	
</form>
 </div>
 </div>

<!-- js placed at bottom to make page load faster -->
       
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

 <script type="text/javascript">

            
$(function()
           
 {
                
$('.user_name').keyup(function()
                
{
                    var checkname=$(this).val();
                    
var availname=remove_whitespaces(checkname);
                    
if(availname!='')
{
                        
$('.check').show();
                       
 $('.check').fadeIn(400).html('<img src="images/ajax-loading.gif" /> ');

                     
   var String = 'username='+ availname;

                        
$.ajax({
                            
type: "POST",
                            
url: "username-check.php",
                            
data: String,
                            
cache: false,
                            
success: function(result){
                                
var result=remove_whitespaces(result);
    
 if(result=='')
{
                                    
$('.check').html('<img src="accept.png">This Username Is Avaliable');
                                    
}
else
{
                                    
$('.check').html('<img src="wrong.jpg">Username Not Avaliable');                               
}
                            
}
                        
});
                    
}
else
{
                       
 $('.check').html('');

                    
}
                
});
            
});
            
function remove_whitespaces(str)
{
                
var str=str.replace(/^\s+|\s+$/,'');
                
return str;
           
 }
 
function checkPass1()
{
    //Store the password field objects into variables ...
  var pass1 = document.getElementById('pass1');
  var htm = "";
  var upperCase = new RegExp('[^A-Z]');
  var lowerCase = new RegExp('[^a-z]');
  var numbers = new RegExp('[^0-9]');
  var pwdlength = $("#pass1").val().length;

  if (pwdlength >= 0 && pwdlength <= 7) {
    var d = "Too Short";
  }
  else if (pwdlength >= 8 && !($("#pass1").val().match(upperCase)) && !($("#pass1").val().match(lowerCase)) && !($("#pass1").val().match(numbers))) { 
    d = "Too Weak";
    alert(d); 
  }
  else {
    alert("good");
  }
}        
</script>

</body>
</html>