<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1 /DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta charset="utf-8">
<title>Minor</title>

<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"></link>
<link rel="stylesheet" type="text/css" href="css/style.css"></link>
    
   <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.7.1.min.js">
</script>
 <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
 
<script type="text/javascript" src="js/stellar.js"></script>
<script type="text/javascript" src="js.js"></script>

<script type="text/javascript" src="waypoints.js"></script>
<script type="text/javascript" src="easing.js"></script>


<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" type="text/css" href="shadowbox.css">
<!--[if IE]><link rel="stylesheet" type="text/css" href="style_ie.css" /><![endif]-->
<style type="text/css">

@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 20px;
margin-left: auto;
margin-right: auto;
width : 350px;
font-size: 16px;
background: #CCCCCC;
}

</style>
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<script src="https://www.google.com/jsapi/" type="text/javascript"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>
<script type="text/javascript" src="line.js">
</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.min.js">
</script>
 
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/themes/dot-luv/jquery-ui.css" />
 
 <script type="text/javascript" src="line1.js">
</script>
  
<script type="text/javascript" src="line2.js">
</script>

     

 <script type="text/javascript" src="data.js"></script>

<script type="text/javascript">
function showControl() {
var feeds = [
{title:'Moneycontrol',
url:'http://moneycontrol.com/rss/latestnews.xml'},
{title:'NDTV Profit',
url:'http://feeds.feedburner.com/NDTV-Business'},
{title:'Economics Times',
url:'http://economictimes.indiatimes.com/Markets/markets/rssfeeds/1977021501.cms'}];

new GFdynamicFeedControl(feeds, 'feedControl',
{numResults : 6, stacked : true,
title: "Top News"});
}
google.load("feeds", "1");
google.setOnLoadCallback(showControl);
</script>
<script type="text/javascript">
            $(document).ready(function(){
               
                setInterval(gain,3000);
            });

function gain() {
	   // var query_value = $('input#search').val();
	   // $('b#search-string').html(query_value);
		//alert("this is working");
		
			$.ajax({	
				type: "POST",
				url: "gainer.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{ 
					$("ul#gain").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "loser.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{ 
					$("ul#lose").html(html);
				}
			});
		  
	}
            
            </script>

<!--ajax starts -->

	<!-- Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Live Search Tutorial</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Load CSS -->
	<link href="style.css" rel="stylesheet" type="text/css" />
	<!-- Load Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
	<!-- Load jQuery library -->
	<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
	<!-- Load custom js -->
	<script type="text/javascript" src="custom.js"></script>

<!--ajax ends -->
<!-- Start visualslideshow.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine/css/slideshow.css" media="screen" /> 
<style type="text/css">.slideshow a#vlb{display:none}</style> 
<script type="text/javascript" src="engine/js/mootools.js"></script> 
<script type="text/javascript" src="engine/js/visualslideshow.js"></script> 
<!-- End visualslideshow.com HEAD section -->

       <script type="text/javascript" >
          
      
      
      
      function data() {
		// Set Timeout
	    
  
              //alert("working");
	    
// Set Search String
	   
 var date1 = $('input#datepicker').val();
       
     var search_string =$('select#company').val();
			//alert(date1);
			//alert(search_string);
	 
   // Do Search
	    if ( date1 === '')
 {
	    		    	$('#show1').text('Enter a valid Date').show('slow').fadeOut(2000);

	    }
else if(search_string === ''){
                $('#show1').text('Enter a valid Company').show('slow').fadeOut(2000);
            }
   
         else
               {
	   // $('b#search-string').html(query_value);
	
	
		if(search_string !== ''){
             
       // alert("working");
			
$.ajax({	
                           
	
			type: "POST",
		
		url: "data.php",
		
		data: { company: search_string,
  
                                 date2 : date1 
   
                             },
				
cache: false,
				
	
			success: function(html)
	
			{
				
	$("#show1").html(html);
		
		}
			
});
		}return false;    

	}
                
    
 }
	</script>
<!--end-->


 

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->


</head>

<body>

	<ul class="navigation">
		
                <li data-slide="1">Home</li>
		<li data-slide="2">Axis_Bank</li>
		<li data-slide="3">Acc</li>
		<li data-slide="4">Airtel</li>
		<li data-slide="5">Ambuja_Cement</li>
		<li data-slide="6">Asian_Paints</li>
                <li data-slide="7">Bajaj_Auto</li>
                <li data-slide="8">Bharat_Petroleum</li>
                <li data-slide="9">Cipla</li>
		<li data-slide="10">Dabur</li>
		<li data-slide="11">DLF</li>
		<li data-slide="12">Havells</li>
		<li data-slide="13">Hdfc_Bank</li>
		<li data-slide="14">Hero</li>
                <li data-slide="15">Hindustan_Unilever</li>
                
                <li data-slide="16">ICICI_Bank</li>
		<li data-slide="17">Infosys</li>
		<li data-slide="18">Jaiprakash_Associates</li>
		<li data-slide="19">Jindal_Steel&Power</li>
		<li data-slide="20">JSW</li>
		<li data-slide="21">Larsen&Toubro</li>
                <li data-slide="22">Maruti</li>
                
                <li data-slide="23">Nifty</li>
		<li data-slide="24">Pidilite</li>
		<li data-slide="25">Ranbaxy</li>
		<li data-slide="26">Reliance</li>
		<li data-slide="27">Dollar_Rupee</li>
		<li data-slide="28">SBI</li>
                <li data-slide="29">Sensex</li>
                
                <li data-slide="30">Tata_Steel</li>
                <li data-slide="31">TCS</li>
                
	</ul>



          
	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="2" >
           

	

<div id="header">
<div id="flash">
<object codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="80" height="50">
<param name="Src" value="coin2.swf">
<param name="WMode" value="Transparent">
<param name="Play" value="true">
<param name="Loop" value="false">
<param name="Quality" value="High">
<param name="Menu" value="false">
<param name="AllowScriptAccess" value="">
<param name="Scale" value="ShowAll">
<param name="DeviceFont" value="false">
<param name="AllowNetworking" value="all">
<embed type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"
src="coin2.swf" wmode="Transparent" play="true" loop="false" quality="High" menu="0" scale="ShowAll" devicefont="0" allownetworking="all" width="80" height="50" >
</object>
</div>
<div id="move">
</div>
<div id="start">
RideOnStock
</div>
<div id="skate">
<b>
<?php
session_start(); 
//echo $_SESSION['login_user']; 
if (!isset($_SESSION['login_user']))
{ 
echo "WELCOME GUEST";
}?>
<?php
if (isset($_SESSION['login_user']))
{
 echo "WELCOME  ";
 echo "&nbsp";
 echo $_SESSION['login_user'];
}
?>
<b>
</div>
<div id="menu">
<p></p>

&nbsp;<a href="news.php" rel=shadowbox;height=600;width=800>Expert'sView</a> &middot;
<?php
 
//echo $_SESSION['login_user']; 
if (!isset($_SESSION['login_user']))
{ 
echo "<a href=log1.php rel=shadowbox;height=400;width=800>Watchlist</a>";
}?>
<?php
if (isset($_SESSION['login_user']))
{
 echo "<a href=port.php rel=shadowbox;width=800>Watchlist</a>";
}
?>

  
 &middot; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Login</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {
                echo "<a href=logout.php>Logout</a>";
        }
?> 
               &middot; <a href="about.xml" rel="shadowbox">AboutUs</a> &middot; <a href="feedback_form.php" rel=shadowbox;height=600;width=800>Feedback</a> 
       </div>
                <form id="search" action="#" method="post">
            <div>
                <input type="submit" class="submit" value="" id="searchbutton">
                <input class="input" type="text" id="search" autocomplete="off" value="Enter Company" onBlur="if(this.value=='') this.value='Enter Company'" onFocus="if(this.value=='Enter Company') this.value=''">
                <h6 id="results-text">Showing results for: <b id="search-string">Array</b></h6>
                            <ul id="results"></ul>
            </div>
                    </form>
</div>

    <div id="insert">

<div id="slide-box">


    
<!-- Start visualslideshow.com BODY section -->
            <div id="show" class="slideshow"> 
                    <div class="slideshow-images">
                                    <a href="#"><img id="slide-0" src="data/images/1.jpg"  /></a>
                                    <a href="#"><img id="slide-1" src="data/images/2.jpg" /></a>
                                    <a href="#"><img id="slide-2" src="data/images/3.jpg" /></a>
                                    <a href="#"><img id="slide-3" src="data/images/4.jpg" /></a>
                                    <a href="#"><img id="slide-4" src="data/images/5.jpg"  /></a>
                                    <a href="#"><img id="slide-5" src="data/images/6.jpg"  /></a>
                    </div>

            </div>
<!-- End visualslideshow.com BODY section -->


</div>

<div id="mainbox">
            <div id="box1">
                    <div id="share-info">
                            <h4>Sensex</h4>
                            <ul id="result"><li><h3>Price</h3></li></ul>
                            <b><ul id="per">Change</ul></b>
                            <div id="chart_div1" ></div>

                    </div>
            </div>
            <div id="box2">
                    <div id="share-info">
                                <h4>Nifty</h4>
                                <ul id="result1"><li><h3>Price</h3></li></ul>
                                </b><ul id="per1">Change</ul></b>
                                <div id="chart_div2" ></div>
                    </div>
            </div>
            <div id="box3">
                    <div id="share-info">
                                <h4>Dollar-Rupee</h4>
                                <ul id="result2"><li><h3>Price</h3></li></ul>
                                <b><ul id="per2">Change</ul></b>
                                <div id="chart_div3"></div>

                    </div>
            </div>
</div>
<div id="last" >
               <div id="lft">
                             <div id="bbox">
                                        <div id="bor">
                                                        <p style="font-family:lucida handwriting ; font-size: 25px; color: #FFFFFF;"><b>Search</p>
                                                        <p></p>
                                                        <p></p>
                                                        <p style="font-family:arial ;font-size: 15px; color: #FFFFFF;">Date: <input id="datepicker" type="text"></p>
                                                        <p></p>
                                                        <p></p>
                                                        <p></p>
                                                        <p></p>
                                                                        <p></p>		<p></p>
                                                                        <p></p>
                                                               <p style="font-family:arial ;font-size: 15px; color: #FFFFFF;">Company Name: 
                                                                    <select id="company">
                                                                        <option></option>
                                                                        <option value="acc">Acc Cement</option>
                                                                        <option value="ambuja_cement">Ambuja Cement</option>
                                                                        <option value="asian_paints">Asian Paints</option>
                                                                        <option value="axis_bank">Axis Bank</option>
                                                                        <option value="bajaj_auto">Bajaj Auto</option>
                                                                        <option value="airtel">Bharti Airtel</option>
                                                                        <option value="bharat_petroleum">Bharat Petroleum</option>
                                                                        <option value="cipla">Cipla</option>
                                                                        <option value="dabur">Dabur</option>
                                                                        <option value="dlf">DLF</option>
                                                                        <option value="havells">Havells India</option>
                                                                        <option value="hdfc_bank">HDFC Bank</option>
                                                                        <option value="hero">Hero Motocorp</option>
                                                                        <option value="hindustan_unilever">Hindustan Unilever</option>
                                                                        <option value="icici_bank">ICICI Bank</option>
                                                                        <option value="infosys">Infosys</option>
                                                                        <option value="jaiprakash">Jaiprakash Associates</option>
                                                                        <option value="jindal_steel">Jindal Steel & Power</option>
                                                                        <option value="jsw">JSW</option>
                                                                        <option value="lt">Larsen & Toubro</option>
                                                                        <option value="maruti">Maruti Suzuki</option>
                                                                        <option value="nifty">Nifty</option>
                                                                        <option value="pidilite">Pidilite</option>
                                                                        <option value="ranbaxy">Ranbaxy</option>
                                                                        <option value="reliance">Reliance</option>
                                                                        <option value="sensex">Sensex</option>
                                                                        <option value="sbi">State Bank Of India</option>
                                                                        <option value="tata_steel">Tata Steel</option>
                                                                         <option value="tcs">TCS</option>
                                                                    </select>                                                   
                                                                </p>
                                                                        <p></p>
                                                                        <p></p>
                                                                <input type='submit' value='Search' id='submit' onclick='data();'/>
                                                                <div id='show1'></div>
</div>
                <div id="bor1">
                            <div id="top1">
                                    <p style="font-family:lucida handwriting ; font-size: 25px; color: #FFFFFF;"><b>Top Gainer</p>
                                    <ul id="gain"><li><p style="font-family:arial ; font-size: 15px; color: #FFFFFF;">this must be replaced</li></ul></p>
                            </div>
                            <div id="top2">
                                    <p style="font-family:lucida handwriting ; font-size: 25px; color: #FFFFFF;"><b>Top Loser</p>
                                    <ul id="lose"><li><p style="font-family:arial ; font-size: 15px; color: #FFFFFF;">this must be replaced</li></ul></p>
                            </div>
                </div>
                             </div>
               </div>
<div id="centr">
                <div id="body">
                            <div id="feedControl">Loading...</div>
                </div>
</div>
<div id="rght">
                <div id="video">
                            <iframe width="400" height="250" src="http://www.youtube.com/embed/UWDaf9YVJgg"></iframe>

                             <iframe width="400" height="250" src="http://www.youtube.com/embed/EXahSuZ3Xwo"></iframe>

                </div>
</div>	
</div>
    </div>   
<div id="footer">
                <div id="foota">
                        <h4>CONTACT US:</h4>
                        <div class="des">RIDE ON STOCK <br>A-40 ANDHERI EAST <br> MUMBAI</div>
                </div>
                <div id="footb">
                        <h4>FOLLOW US:</h4>
                        <div class="des">
                        <span id="bottom_nav_bar"> 
                        <a href="http://facebook.com" target="_blank">FACEBOOK</a><img src="fb.jpg"></span><br><span id="bottom_nav_bar"> <a href="http://twitter.com" target="_blank">TWITTER</a><img src="tw.png"></span><br> <span id="bottom_nav_bar"> <a href="http:\\plus.google.com" target="_blank">GOOGLE PLUS</a> <img src=gp.png></span></div>
                </div>
                <div id="footc">
                                <h4>TEAM:</h4>
                                <div class="desc">
                                <span id="bottom_nav_bar"> 
                                 <a href="https://www.facebook.com/kirti.verma.33" target="_blank">KIRTI VERMA</a></span><br><span id="bottom_nav_bar"> <a href="https://www.facebook.com/mridul.mundhra" target="_black">MRIDUL MUNDHRA</a></span><br> <span id="bottom_nav_bar"> <a href="https://www.facebook.com/u.garg1994" target="_black">UTKARSH GARG</a></span></div>
                </div>
                <div id="disc">
                            Copyright @rideonstock.com Ltd. All Rights Reserved.
                </div>
                <a class="button" data-slide="2" title=""></a>
</div>


            
</div>
    

<a name="Axis Bank"></a>

	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="wrapper">

			
		</div>

		<span class="slideno">Axis Bank</span>

             <!--   <script type="text/javascript" src="havellsjava.js"></script>
             ">
-->                <script type="text/javascript" src="axisjava.js"></script>
<div id="box7"><img src="boxs.png"></img></div>
                <div id="ext3">
               
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addaxis.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div>

<div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">  <a href=axisabout.xml rel=shadowbox>About</a></div>
                <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.axisbank.com" target="_blank">Company Website</a>   </div> 
                <ul id="axiscurr"><li>Current Price</li></ul>
                <ul id="axisper"><li>Increment(Percentage)</li></ul>
                <div id="axisprev1">Previous Close</div>
                    <ul id="axisprev"><li>Previous Close</li></ul>
                <div id="axisopen1">Open Price</div>
                <ul id="axisopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="axischart.js"></script>
                <div id="axischart" ></div>
                
                <div id="axisaction1"><ul id="axisaction" align="left"><li>Action in Axis</li></ul></div>
                <div id="axisaction2"><h1><font color="white" align="center"><b>Action In Axis Bank</b></font></h1></div>
            	<a class="button" data-slide="3" title=""></a>
         <div id="logo"><img src="axislogo.jpg" height="120" width="120" data-stellar-ratio="2.7"></img></div>

	</div><!--End Slide 2-->




<a name="ACC Cement"></a>
	<div class="slide" id="slide3" data-slide="3" >
		
		<span class="slideno">ACC</span>

                
            <!--    <script type="text/javascript" src="accjava.js"></script> -->
                <div id="box7"><img src="boxs.png"></img></div>
                <div id="ext3">    
                <?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addacc.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div>
                 
                 <div id="box8"><img src="boxs.png"></img></div>
                 
                <div id="extr3">        <a href=accabout.xml rel=shadowbox>About</a>   </div> 
                <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.acclimited.com" target="_blank">Company Website</a>   </div> 
                <ul id="acccurr"><li>Current Price</li></ul>
                <ul id="accper"><li>Increment(Percentage)</li></ul>
                <div id="accprev1">Previous Close</div>
                    <ul id="accprev"><li>Previous Close</li></ul>
                <div id="accopen1">Open Price</div>
                <ul id="accopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="accchart.js"></script>
                <div id="accchart" ></div>
                
                <div id="accaction1"><ul id="accaction" align="left"><li>Action in ACC</li></ul></div>
                <div id="accaction2"><h1><font color="white" align="center"><b>Action In ACC</b></font></h1></div>
		<img src="acc.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
		
		<a class="button" data-slide="4" title=""></a>

	</div><!--End Slide 3-->
<a name="Bharti Airtel"></a>
        <div class="slide" id="slide4" data-slide="4" >
		
		<span class="slideno">Airtel</span>
<img src="airtel.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43"></img>
		<div id="box7"><img src="boxs.png"></img></div>
                          <div id="ext3">         <!--     <script type="text/javascript" src="airteljava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addairtel.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div>
              <div id="box8"><img src="boxs.png"></img></div>
                <div id="extr3">
                <a href=airtelabout.xml rel=shadowbox>About</a></div> 
              <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.airtel.in" target="_blank">Company Website</a>   </div> 
                <ul id="airtelcurr"><li>Current Price</li></ul>
                <ul id="airtelper"><li>Increment(Percentage)</li></ul>
                <div id="airtelprev1">Previous Close</div>
                    <ul id="airtelprev"><li>Previous Close</li></ul>
                <div id="airtelopen1">Open Price</div>
                <ul id="airtelopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="airtelchart.js"></script>
                <div id="airtelchart" ></div>
                
                <div id="airtelaction1"><ul id="airtelaction" align="left"><li>Action in Airtel</li></ul></div>
                <div id="airtelaction2"><h1><font color="white" align="center"><b>Action In Airtel</b></font></h1></div>
		
                
		<a class="button" data-slide="5" title=""></a>


	</div><!--End Slide 4-->
<a name="Ambuja Cement"></a>
	<div class="slide" id="slide5" data-slide="5" >
		
		<span class="slideno">Ambuja Cement</span>
<img src="ambuja.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
	<div id="box7"><img src="boxs.png"></img></div>	
    <div id="ext3">      <!--      <script type="text/javascript" src="ambujajava.js"></script> -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addambuja.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">
                <a href=ambujaabout.xml rel=shadowbox>About</a></div>
        <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.ambujacement.com" target="_blank">Company Website</a>   </div> 
                <ul id="ambujacurr"><li>Current Price</li></ul>
                <ul id="ambujaper"><li>Increment(Percentage)</li></ul>
                <div id="ambujaprev1">Previous Close</div>
                    <ul id="ambujaprev"><li>Previous Close</li></ul>
                <div id="ambujaopen1">Open Price</div>
                <ul id="ambujaopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="ambujachart.js"></script>
                <div id="ambujachart" ></div>
                
                <div id="ambujaaction1"><ul id="ambujaaction" align="left"><li>Action in Ambuja Cement</li></ul></div>
                <div id="ambujaaction2"><h1><font color="white" align="center"><b>Action In Ambuja Cement</b></font></h1></div>
		
                
		<a class="button" data-slide="6" title=""></a>


	</div><!--End Slide 5-->
<a name="Asian Paints"></a>
	<div class="slide" id="slide6" data-slide="6" >
		
		<span class="slideno">Asian Paints</span>
<img src="asian.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
	<div id="box7"><img src="boxs.png"></img></div>	
  <div id="ext3">          <!--    <script type="text/javascript" src="asianjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addasian.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">
                <a href=asianabout.xml rel=shadowbox>About</a></div> 
        <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.asianpaints.com" target="_blank">Company Website</a>   </div> 
                <ul id="asiancurr"><li>Current Price</li></ul>
                <ul id="asianper"><li>Increment(Percentage)</li></ul>
                <div id="asianprev1">Previous Close</div>
                    <ul id="asianprev"><li>Previous Close</li></ul>
                <div id="asianopen1">Open Price</div>
                <ul id="asianopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="asianchart.js"></script>
                <div id="asianchart" ></div>
                
                <div id="asianaction1"><ul id="asianaction" align="left"><li>Action in Asian Paints</li></ul></div>
                <div id="asianaction2"><h1><font color="white" align="center"><b>Action In Asian Paints</b></font></h1></div>
		
                
		<a class="button" data-slide="7" title=""></a>
                </div><!--End Slide 6-->
	<a name="Bajaj Auto"></a>
                <div class="slide" id="slide7" data-slide="7" >
		
		
		<span class="slideno">Bajaj Auto</span>
<img src="bajaj.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
                <div id="box7"><img src="boxs.png"></img></div>
                <div id="ext3">                
             <!--   <script type="text/javascript" src="bajajjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addbajaj.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
                <div id="extr3">
                <a href=bajajabout.xml rel=shadowbox>About</a></div> 
                <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.bajajauto.com" target="_blank">Company Website</a>   </div> 
                <ul id="bajajcurr"><li>Current Price</li></ul>
                <ul id="bajajper"><li>Increment(Percentage)</li></ul>
                <div id="bajajprev1">Previous Close</div>
                    <ul id="bajajprev"><li>Previous Close</li></ul>
                <div id="bajajopen1">Open Price</div>
                <ul id="bajajopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="bajajchart.js"></script>
                <div id="bajajchart" ></div>
                
                <div id="bajajaction1"><ul id="bajajaction" align="left"><li>Action in Bajaj Auto</li></ul></div>
                <div id="bajajaction2"><h1><font color="white" align="center"><b>Action In Bajaj Auto</b></font></h1></div>
		
		<a class="button" data-slide="8" title=""></a>
	</div><!--End Slide 7-->
   <a name="Bharat Petroleum"></a>
        <div class="slide" id="slide8" data-slide="8" >
		
		
		<span class="slideno">Bharat Petroleum</span>
<img src="bharat.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
                <div id="box7"><img src="boxs.png"></img></div>
                           <div id="ext3">        <!--    <script type="text/javascript" src="bharatjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addbharat.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=bharatabout.xml rel=shadowbox>About</a>  </div> 
                <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.bharatpetroleum.in" target="_blank">Company Website</a>   </div> 
                <ul id="bharatcurr"><li>Current Price</li></ul>
                <ul id="bharatper"><li>Increment(Percentage)</li></ul>
                <div id="bharatprev1">Previous Close</div>
                    <ul id="bharatprev"><li>Previous Close</li></ul>
                <div id="bharatopen1">Open Price</div>
                <ul id="bharatopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="bharatchart.js"></script>
                <div id="bharatchart" ></div>
                
                <div id="bharataction1"><ul id="bharataction" align="left"><li>Action in Bharat Petroleum</li></ul></div>
                <div id="bharataction2"><h1><font color="white" align="center"><b>Action In Bharat Petroleum</b></font></h1></div>
		
                <a class="button" data-slide="9" title=""></a>
		</div><!--End Slide 8-->
        <a name="Cipla"></a>
        
        <div class="slide" id="slide9" data-slide="9" >
		
		
		<span class="slideno">Cipla</span>
 <img src="cipla.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">               
              <div id="box7"><img src="boxs.png"></img></div>
                               <div id="ext3">          <!--<script type="text/javascript" src="ciplajava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addcipla.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=ciplaabout.xml rel=shadowbox>About</a></div>
              <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.cipla.com" target="_blank">Company Website</a>   </div> 
                <ul id="ciplacurr"><li>Current Price</li></ul>
                <ul id="ciplaper"><li>Increment(Percentage)</li></ul>
                <div id="ciplaprev1">Previous Close</div>
                    <ul id="ciplaprev"><li>Previous Close</li></ul>
                <div id="ciplaopen1">Open Price</div>
                <ul id="ciplaopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="ciplachart.js"></script>
                <div id="ciplachart" ></div>
                
                <div id="ciplaaction1"><ul id="ciplaaction" align="left"><li>Action in Cipla</li></ul></div>
                <div id="ciplaaction2"><h1><font color="white" align="center"><b>Action In Cipla</b></font></h1></div>
		
		<a class="button" data-slide="10" title=""></a>
	</div><!--End Slide 9-->
        <a name="Dabur"></a>
        <div class="slide" id="slide10" data-slide="10" >
		
		
		<span class="slideno">Dabur</span>
   <img src="dabur.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">             
  <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">            <!--  <script type="text/javascript" src="daburjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=adddabur.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=daburabout.xml rel=shadowbox>About</a>    </div> 
  <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.dabur.com" target="_blank">Company Website</a>   </div> 
                <ul id="daburcurr"><li>Current Price</li></ul>
                <ul id="daburper"><li>Increment(Percentage)</li></ul>
                <div id="daburprev1">Previous Close</div>
                    <ul id="daburprev"><li>Previous Close</li></ul>
                <div id="daburopen1">Open Price</div>
                <ul id="daburopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="daburchart.js"></script>
                <div id="daburchart" ></div>
                
                <div id="daburaction1"><ul id="daburaction" align="left"><li>Action in Dabur</li></ul></div>
                <div id="daburaction2"><h1><font color="white" align="center"><b>Action In Dabur</b></font></h1></div>
		
		<a class="button" data-slide="11" title=""></a>
	</div><!--End Slide 10-->
        <a name="DLF"></a>
        <div class="slide" id="slide11" data-slide="11" >
		
		
		<span class="slideno">DLF</span>
   <img src="dlf.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">             
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">         <!--    <script type="text/javascript" src="dlfjava.js"></script>-->
                 
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=adddlf.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=dlfabout.xml rel=shadowbox>About</a></div>
 <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.dlf.in" target="_blank">Company Website</a>   </div> 
                <ul id="dlfcurr"><li>Current Price</li></ul>
                <ul id="dlfper"><li>Increment(Percentage)</li></ul>
                <div id="dlfprev1">Previous Close</div>
                    <ul id="dlfprev"><li>Previous Close</li></ul>
                <div id="dlfopen1">Open Price</div>
                <ul id="dlfopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="dlfchart.js"></script>
                <div id="dlfchart" ></div>
                
                <div id="dlfaction1"><ul id="dlfaction" align="left"><li>Action in DLF</li></ul></div>
                <div id="dlfaction2"><h1><font color="white" align="center"><b>Action In DLF</b></font></h1></div>
		
		<a class="button" data-slide="12" title=""></a>
	</div><!--End Slide 11-->
        <a name="Havells India"></a>
        <div class="slide" id="slide12" data-slide="12" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Havells India</span>
<img src="Havells.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">      <!--        <script type="text/javascript" src="havellsjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addhavells.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?></div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3"> 

                <a href=havellsabout.xml rel=shadowbox>About</a></div>
 <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.havells.com" target="_blank">Company Website</a>   </div> 
                <ul id="havellscurr"><li>Current Price</li></ul>
                <ul id="havellsper"><li>Increment(Percentage)</li></ul>
                <div id="havellsprev1">Previous Close</div>
                    <ul id="havellsprev"><li>Previous Close</li></ul>
                <div id="havellsopen1">Open Price</div>
                <ul id="havellsopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="havellschart.js"></script>
                <div id="havellschart" ></div>
                
                <div id="havellsaction1"><ul id="havellsaction" align="left"><li>Action in Havells</li></ul></div>
                <div id="havellsaction2"><h1><font color="white" align="center"><b>Action In Havells</b></font></h1></div>
               <a class="button" data-slide="13" title=""></a>
	</div><!--End Slide 12-->
        <a name="HDFC Bank"></a>
        <div class="slide" id="slide13" data-slide="13" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Hdfc Bank</span>
<img src="hdfc.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
   <div id="box7"><img src="boxs.png"></img></div>
                                  <div id="ext3">        <!--       <script type="text/javascript" src="hdfcjava.js"></script>-->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addhdfc.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=hdfcabout.xml rel=shadowbox>About</a></div>
   <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.hdfcbank.com" target="_blank">Company Website</a>   </div> 
                <ul id="hdfccurr"><li>Current Price</li></ul>
                <ul id="hdfcper"><li>Increment(Percentage)</li></ul>
                <div id="hdfcprev1">Previous Close</div>
                    <ul id="hdfcprev"><li>Previous Close</li></ul>
                <div id="hdfcopen1">Open Price</div>
                <ul id="hdfcopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="hdfcchart.js"></script>
                <div id="hdfcchart" ></div>
                
                <div id="hdfcaction1"><ul id="hdfcaction" align="left"><li>Action in Hdfc</li></ul></div>
                <div id="hdfcaction2"><h1><font color="white" align="center"><b>Action In Hdfc Bank</b></font></h1></div>
		<a class="button" data-slide="14" title=""></a>
	</div><!--End Slide 13-->
        <a name="Hero Motocorp"></a>
        <div class="slide" id="slide14" data-slide="14" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Hero</span>
<img src="Hero.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
  <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">         <!--     <script type="text/javascript" src="herojava.js"></script>  -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addhero.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?></div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3"> 

                <a href=heroabout.xml rel=shadowbox>About</a></div>
  <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.heromotocorp.com" target="_blank">Company Website</a>   </div> 
                <ul id="herocurr"><li>Current Price</li></ul>
                <ul id="heroper"><li>Increment(Percentage)</li></ul>
                <div id="heroprev1">Previous Close</div>
                    <ul id="heroprev"><li>Previous Close</li></ul>
                <div id="heroopen1">Open Price</div>
                <ul id="heroopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="herochart.js"></script>
                <div id="herochart" ></div>
                
                <div id="heroaction1"><ul id="heroaction" align="left"><li>Action in Hero</li></ul></div>
                <div id="heroaction2"><h1><font color="white" align="center"><b>Action In Hero</b></font></h1></div>
		<a class="button" data-slide="15" title=""></a>
	</div><!--End Slide 14-->
        <a name="Hindustan Unilever"></a>
        <div class="slide" id="slide15" data-slide="15" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Hindustan Unilever</span>
<img src="hindustan.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">       <!--      <script type="text/javascript" src="hindustanjava.js"></script> -->
<<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addhindustan.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=hindustanabout.xml rel=shadowbox>About</a></div> 
 <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.hul.co.in" target="_blank">Company Website</a>   </div> 
                <ul id="hindustancurr"><li>Current Price</li></ul>
                <ul id="hindustanper"><li>Increment(Percentage)</li></ul>
                <div id="hindustanprev1">Previous Close</div>
                    <ul id="hindustanprev"><li>Previous Close</li></ul>
                <div id="hindustanopen1">Open Price</div>
                <ul id="hindustanopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="hindustanchart.js"></script>
                <div id="hindustanchart" ></div>
                
                <div id="hindustanaction1"><ul id="hindustanaction" align="left"><li>Action in Hindustan</li></ul></div>
                <div id="hindustanaction2"><h1><font color="white" align="center"><b>Action In Hindustan Unilever</b></font></h1></div>
        	<a class="button" data-slide="16" title=""></a>
	</div><!--End Slide 15-->
        <a name="ICICI Bank"></a>
        <div class="slide" id="slide16" data-slide="16" data-stellar-background-ratio="2">
		
		
		<span class="slideno">ICICI Bank</span>
    <img src="icici.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">      <!--     <script type="text/javascript" src="icicijava.js"></script>     -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addicici.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=iciciabout.xml rel=shadowbox>About</a>  </div> 
     <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.icicibank.com" target="_blank">Company Website</a>   </div> 
                <ul id="icicicurr"><li>Current Price</li></ul>
                <ul id="iciciper"><li>Increment(Percentage)</li></ul>
                <div id="iciciprev1">Previous Close</div>
                    <ul id="iciciprev"><li>Previous Close</li></ul>
                <div id="iciciopen1">Open Price</div>
                <ul id="iciciopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="icicichart.js"></script>
                <div id="icicichart" ></div>
                
                <div id="iciciaction1"><ul id="iciciaction" align="left"><li>Action in Icici</li></ul></div>
                <div id="iciciaction2"><h1><font color="white" align="center"><b>Action In Icici Bank</b></font></h1></div>
           -->     <a class="button" data-slide="17" title=""></a>
	</div><!--End Slide 16-->
        <a name="Infosys"></a>
        <div class="slide" id="slide17" data-slide="17" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Infosys</span>
   <img src="infosys.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">      <!--     <script type="text/javascript" src="infosysjava.js"></script>   -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addinfosys.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=infosysabout.xml rel=shadowbox>About</a>  </div>   
    <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.infosys.com" target="_blank">Company Website</a>   </div> 
                <ul id="infosyscurr"><li>Current Price</li></ul>
                <ul id="infosysper"><li>Increment(Percentage)</li></ul>
                <div id="infosysprev1">Previous Close</div>
                    <ul id="infosysprev"><li>Previous Close</li></ul>
                <div id="infosysopen1">Open Price</div>
                <ul id="infosysopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="infosyschart.js"></script>
                <div id="infosyschart" ></div>
                
                <div id="infosysaction1"><ul id="infosysaction" align="left"><li>Action in Infosys</li></ul></div>
                <div id="infosysaction2"><h1><font color="white" align="center"><b>Action In Infosys</b></font></h1></div>
		<a class="button" data-slide="18" title=""></a>
	</div><!--End Slide 17-->
        <a name="Jaiprakash Associates"></a>
        <div class="slide" id="slide18" data-slide="18" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Jaiprakash Asso.</span>
    <img src="jaiprakash.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">     <!--      <script type="text/javascript" src="jaiprakashjava.js"></script>    -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addjaiprakash.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=jaypeeabout.xml rel=shadowbox>About</a></div>
    <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.jalindia.com" target="_blank">Company Website</a>   </div> 
                <ul id="jaiprakashcurr"><li>Current Price</li></ul>
                <ul id="jaiprakashper"><li>Increment(Percentage)</li></ul>
                <div id="jaiprakashprev1">Previous Close</div>
                    <ul id="jaiprakashprev"><li>Previous Close</li></ul>
                <div id="jaiprakashopen1">Open Price</div>
                <ul id="jaiprakashopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="jaiprakashchart.js"></script>
                <div id="jaiprakashchart" ></div>
                
                <div id="jaiprakashaction1"><ul id="jaiprakashaction" align="left"><li>Action in Jaiprakash</li></ul></div>
                <div id="jaiprakashaction2"><h1><font color="white" align="center"><b>Action In jaiprakash associate</b></font></h1></div>
		<a class="button" data-slide="19" title=""></a>
	</div><!--End Slide 18-->
        <a name="Jindal Steel & Power"></a>
        <div class="slide" id="slide19" data-slide="19" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Jindal Steel & Power</span>
    <img src="jindal.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">      <!--     <script type="text/javascript" src="jindaljava.js"></script>    -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addjindal.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=jindalabout.xml rel=shadowbox>About</a></div>
     <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.jindalsteelpower.com" target="_blank">Company Website</a>   </div> 
                <ul id="jindalcurr"><li>Current Price</li></ul>
                <ul id="jindalper"><li>Increment(Percentage)</li></ul>
                <div id="jindalprev1">Previous Close</div>
                    <ul id="jindalprev"><li>Previous Close</li></ul>
                <div id="jindalopen1">Open Price</div>
                <ul id="jindalopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="jindalchart.js"></script>
                <div id="jindalchart" ></div>
                
                <div id="jindalaction1"><ul id="jindalaction" align="left"><li>Action in Jindal</li></ul></div>
                <div id="jindalaction2"><h1><font color="white" align="center"><b>Action In Jindal</b></font></h1></div>
                
		<a class="button" data-slide="20" title=""></a>
	</div><!--End Slide 19-->
        <a name="JSW"></a>
        <div class="slide" id="slide20" data-slide="20" data-stellar-background-ratio="2">
		
		
		<span class="slideno">JSW</span>
 <img src="jsw.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
 <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">        <!--     <script type="text/javascript" src="jswjava.js"></script>   -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addjsw.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=jswabout.xml rel=shadowbox>About</a></div>  
  <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.jsw.in" target="_blank">Company Website</a>   </div> 
                <ul id="jswcurr"><li>Current Price</li></ul>
                <ul id="jswper"><li>Increment(Percentage)</li></ul>
                <div id="jswprev1">Previous Close</div>
                    <ul id="jswprev"><li>Previous Close</li></ul>
                <div id="jswopen1">Open Price</div>
                <ul id="jswopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="jswchart.js"></script>
                <div id="jswchart" ></div>
                
                <div id="jswaction1"><ul id="jswaction" align="left"><li>Action in Jsw</li></ul></div>
                <div id="jswaction2"><h1><font color="white" align="center"><b>Action In Jsw</b></font></h1></div>
                
		<a class="button" data-slide="21" title=""></a>
	</div><!--End Slide 20-->
        <a name="Larsen and Toubro"></a>
        <div class="slide" id="slide21" data-slide="21" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Larsen & Toubro</span>
<img src="lt.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
      <div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">     <!--     
                
                <script type="text/javascript" src="ltjava.js"></script>    -->
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addlt.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=ltabout.xml rel=shadowbox>About</a></div>
      <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.larsentoubro.com" target="_blank">Company Website</a>   </div> 
                <ul id="ltcurr"><li>Current Price</li></ul>
                <ul id="ltper"><li>Increment(Percentage)</li></ul>
                <div id="ltprev1">Previous Close</div>
                    <ul id="ltprev"><li>Previous Close</li></ul>
                <div id="ltopen1">Open Price</div>
                <ul id="ltopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="ltchart.js"></script>
                <div id="ltchart" ></div>
                
                <div id="ltaction1"><ul id="ltaction" align="left"><li>Action in Larsen</li></ul></div>
                <div id="ltaction2"><h1><font color="white" align="center"><b>Action In Larsen & Turbo</b></font></h1></div>
		<a class="button" data-slide="22" title=""></a>
	</div><!--End Slide 21-->
        <a name="Maruti Suzuki"></a>
        <div class="slide" id="slide22" data-slide="22" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Maruti</span>
<img src="Maruti.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">		
<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">
                
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addmaruti.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?></div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3"> 

                <a href=marutiabout.xml rel=shadowbox>About</a></div>
<div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.marutisuziki.com" target="_blank">Company Website</a>   </div> 
                <ul id="maruticurr"><li>Current Price</li></ul>
                <ul id="marutiper"><li>Increment(Percentage)</li></ul>
                <div id="marutiprev1">Previous Close</div>
                    <ul id="marutiprev"><li>Previous Close</li></ul>
                <div id="marutiopen1">Open Price</div>
                <ul id="marutiopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="marutichart.js"></script>
                <div id="marutichart" ></div>
                
                <div id="marutiaction1"><ul id="marutiaction" align="left"><li>Action in Maruti</li></ul></div>
                <div id="marutiaction2"><h1><font color="white" align="center"><b>Action In Maruti</b></font></h1></div>
		<a class="button" data-slide="23" title=""></a>
                
	</div><!--End Slide 22-->
        <a name="Nifty"></a>
        <div class="slide" id="slide23" data-slide="23" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Nifty</span>

                


                
                <ul id="niftycurr"><li>Current Price</li></ul>
                <ul id="niftyper"><li>Increment(Percentage)</li></ul>
                <div id="niftyprev1">Previous Close</div>
                    <ul id="niftyprev"><li>Previous Close</li></ul>
                <div id="niftyopen1">Open Price</div>
                <ul id="niftyopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="niftychart.js"></script>
                <div id="niftychart" ></div>
                
                
		<a class="button" data-slide="24" title=""></a>
                
	</div><!--End Slide 23-->
        <a name="Pidilite"></a>
        <div class="slide" id="slide24" data-slide="24" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Pidilite</span>
<img src="pidilite.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
		<div id="box7"><img src="boxs.png"></img></div>

<div id="ext3">
                
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addpidilite.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?>
    </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=pidiliteabout.xml rel=shadowbox>About</a> </div>
    <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.pidilite.com" target="_blank">Company Website</a>   </div> 
                <ul id="pidilitecurr"><li>Current Price</li></ul>
                <ul id="pidiliteper"><li>Increment(Percentage)</li></ul>
                <div id="pidiliteprev1">Previous Close</div>
                    <ul id="pidiliteprev"><li>Previous Close</li></ul>
                <div id="pidiliteopen1">Open Price</div>
                <ul id="pidiliteopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="pidilitechart.js"></script>
                <div id="pidilitechart" ></div>
                
                <div id="pidiliteaction1"><ul id="pidiliteaction" align="left"><li>Action in Pidilite</li></ul></div>
                <div id="pidiliteaction2"><h1><font color="white" align="center"><b>Action In Pidilite</b></font></h1></div>
		<a class="button" data-slide="25" title=""></a>
                
	</div><!--End Slide 24-->
        <a name="Ranbaxy"></a>
        <div class="slide" id="slide25" data-slide="25" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Ranbaxy</span>
<img src="Ranbaxy.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">		

                
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addranbaxy.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=ranbaxyabout.xml rel=shadowbox>About</a>   </div>  
<div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.ranbaxy.com" target="_blank">Company Website</a>   </div> 
                <ul id="ranbaxycurr"><li>Current Price</li></ul>
                <ul id="ranbaxyper"><li>Increment(Percentage)</li></ul>
                <div id="ranbaxyprev1">Previous Close</div>
                    <ul id="ranbaxyprev"><li>Previous Close</li></ul>
                <div id="ranbaxyopen1">Open Price</div>
                <ul id="ranbaxyopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="ranbaxychart.js"></script>
                <div id="ranbaxychart" ></div>
                
                <div id="ranbaxyaction1"><ul id="ranbaxyaction" align="left"><li>Action in Ranbaxy</li></ul></div>
                <div id="ranbaxyaction2"><h1><font color="white" align="center"><b>Action In Ranbaxy</b></font></h1></div>
		<a class="button" data-slide="26" title=""></a>
                
	</div><!--End Slide 25-->
        <a name="Reliance"></a>
        <div class="slide" id="slide26" data-slide="26" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Reliance</span>
<img src="reliance.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">		
<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">
                
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addreliance.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=relianceabout.xml rel=shadowbox>About</a>  </div>
<div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.rcom.co.in" target="_blank">Company Website</a>   </div> 
                <ul id="reliancecurr"><li>Current Price</li></ul>
                <ul id="relianceper"><li>Increment(Percentage)</li></ul>
                <div id="relianceprev1">Previous Close</div>
                    <ul id="relianceprev"><li>Previous Close</li></ul>
                <div id="relianceopen1">Open Price</div>
                <ul id="relianceopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="reliancechart.js"></script>
                <div id="reliancechart" ></div>
                
                <div id="relianceaction1"><ul id="relianceaction" align="left"><li>Action in Reliance</li></ul></div>
                <div id="relianceaction2"><h1><font color="white" align="center"><b>Action In Reliance</b></font></h1></div>
		<a class="button" data-slide="27" title=""></a>

	</div><!--End Slide 26-->
<a name="Dollar-Rupee"></a>
<div class="slide" id="slide27" data-slide="27" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Rupee</span>
		

                


                
                <ul id="rupeecurr"><li>Current Price</li></ul>
                <ul id="rupeeper"><li>Increment(Percentage)</li></ul>
                <div id="rupeeprev1">Previous Close</div>
                    <ul id="rupeeprev"><li>Previous Close</li></ul>
                <div id="rupeeopen1">Open Price</div>
                <ul id="rupeeopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="rupeechart.js"></script>
                <div id="rupeechart" ></div>
                
                
		<a class="button" data-slide="28" title=""></a>

	</div><!--End Slide 27-->
        <a name="State Bank of India"></a>
        <div class="slide" id="slide28" data-slide="28" data-stellar-background-ratio="2">
		
		
		<span class="slideno">SBI</span>
<img src="sbi.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
		<div id="box7"><img src="boxs.png"></img></div>

<div id="ext3">

               
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addsbi.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">
                <a href=sbiabout.xml rel=shadowbox>About</a>  </div> 
<div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.sbi.co.in" target="_blank">Company Website</a>   </div> 
                <ul id="sbicurr"><li>Current Price</li></ul>
                <ul id="sbiper"><li>Increment(Percentage)</li></ul>
                <div id="sbiprev1">Previous Close</div>
                    <ul id="sbiprev"><li>Previous Close</li></ul>
                <div id="sbiopen1">Open Price</div>
                <ul id="sbiopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="sbichart.js"></script>
                <div id="sbichart" ></div>
                
                <div id="sbiaction1"><ul id="sbiaction" align="left"><li>Action in SBI</li></ul></div>
                <div id="sbiaction2"><h1><font color="white" align="center"><b>Action In SBI</b></font></h1></div>
		<a class="button" data-slide="29" title=""></a>
	</div><!--End Slide 28-->
        <a name="Sensex"></a>
        <div class="slide" id="slide29" data-slide="29" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Sensex</span>
		

                
                <ul id="sensexcurr"><li>Current Price</li></ul>
                <ul id="sensexper"><li>Increment(Percentage)</li></ul>
                <div id="sensexprev1">Previous Close</div>
                    <ul id="sensexprev"><li>Previous Close</li></ul>
                <div id="sensexopen1">Open Price</div>
                <ul id="sensexopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="sensexchart.js"></script>
                <div id="sensexchart" ></div>
                
                
		<a class="button" data-slide="30" title=""></a>
	</div><!--End Slide 29-->
        <a name="Tata Steel"></a>
        <div class="slide" id="slide30" data-slide="30" data-stellar-background-ratio="2">
		
		
		<span class="slideno">Tata Steel</span>
		
<img src="tata.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">             
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addtata.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=tataabout.xml rel=shadowbox>About</a> </div>
<div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.tatasteel.com" target="_blank">Company Website</a>   </div> 
                <ul id="tatacurr"><li>Current Price</li></ul>
                <ul id="tataper"><li>Increment(Percentage)</li></ul>
                <div id="tataprev1">Previous Close</div>
                    <ul id="tataprev"><li>Previous Close</li></ul>
                <div id="tataopen1">Open Price</div>
                <ul id="tataopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="tatachart.js"></script>
                <div id="tatachart" ></div>
                
                <div id="tataaction1"><ul id="tataaction" align="left"><li>Action in Tata Steel</li></ul></div>
                <div id="tataaction2"><h1><font color="white" align="center"><b>Action In Tata Steel</b></font></h1></div>
		<a class="button" data-slide="31" title=""></a>
	</div><!--End Slide 30-->
        <a name="TCS"></a>
        <div class="slide" id="slide31" data-slide="31" data-stellar-background-ratio="2">
		
		
		<span class="slideno">TCS</span>
<img src="tcs.jpg" height="120" width="120" data-stellar-ratio="2.7" data-seller-vertical-offset="-43">
	<div id="box7"><img src="boxs.png"></img></div>
<div id="ext3">	
<?php
 
                                //echo $_SESSION['login_user']; 
                if (!isset($_SESSION['login_user']))
                { 
                        echo "<a href=log.php rel=shadowbox;height=400;width=800>Add to watchlist</a>";
                }
    ?>
<?php
        if (isset($_SESSION['login_user']))
        {       
                echo "<a href=addtcs.php rel=shadowbox;height=60;width=200>Add to watchlist</a>";
                
        }
?> 
    </div><div id="box8"><img src="boxs.png"></img></div>
<div id="extr3">

                <a href=tcsabout.xml rel=shadowbox>About</a>  </div>
    <div id="box9"><img src="boxs.png"></img></div>
                <div id="extra3">        <a href="http://www.tcs.com" target="_blank">Company Website</a>   </div> 
                <ul id="tcscurr"><li>Current Price</li></ul>
                <ul id="tcsper"><li>Increment(Percentage)</li></ul>
                <div id="tcsprev1">Previous Close</div>
                    <ul id="tcsprev"><li>Previous Close</li></ul>
                <div id="tcsopen1">Open Price</div>
                <ul id="tcsopen"><li>Open Price</li></ul>
                <script type="text/javascript" src="tcschart.js"></script>
                <div id="tcschart" ></div>
                
                <div id="tcsaction1"><ul id="tcsaction" align="left"><li>Action in TCS</li></ul></div>
                <div id="tcsaction2"><h1><font color="white" align="center"><b>Action In TCS</b></font></h1></div>
		<a class="button" data-slide="1" title=""></a>
	</div><!--End Slide 31-->
        
        
</body>
</html>
