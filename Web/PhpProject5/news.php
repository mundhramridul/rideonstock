<html>
    <head>
     <style>
     #ex1{margin-left:3cm;}
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
        <div align="center"><h1><FONT COLOR="RED" size=8>EXPERT ADVICE</FONT></h1></div>
        
        <div id="ex1">
        <p><FONT COLOR="blue" size=6>&nbsp;&nbsp;Trade type &nbsp;&nbsp&nbsp;&nbsp;&nbsp;Buy/Sell &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share</FONT></p>
        <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);

$html = '';
//$html .= '<li class="result">';
$html .= '</p><font size=5><font color="blue">&nbsp;&nbsp;tradetype<font color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type </font></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nameString</p>';
//$html .= '<p><font color="red">Type </font> nameString</p>';
//$html .= '</li>';

$result = mysql_query("SELECT type,data,tradetype FROM advice where date=(SELECT max(date) FROM advice)");

while($result1 = mysql_fetch_assoc($result))
 	{
		$result_array[] = $result1;
 	}
	
		foreach ($result_array as $result) 
		{
		
                    $display_name = $result['data'];
                    $display_type=$result['type'];
                    $display_trade=$result['tradetype'];
                    if($display_type =='SELL')
                    {
			//$display_url = 'http://localhost/PhpProject1/'.urlencode($result['link']).'';
                        $output = str_replace('nameString', $display_name, $html);
			$output = str_replace('tradetype', $display_trade, $output);
                        $output = str_replace('Type', $display_type, $output);
                        echo($output);
                    }
                    
                   
                    
                elseif($display_type =='BUY')
                    {
			//$display_url = 'http://localhost/PhpProject1/'.urlencode($result['link']).'';
                        $output = str_replace('nameString', $display_name, $html);
			$output = str_replace('tradetype', $display_trade, $output);
                        $output = str_replace('Type', $display_type, $output);
                        $output = str_replace('red', 'green', $output);
                        echo($output);
                    }
                }	
                
?>
        </div>
    </body>   
</html>
