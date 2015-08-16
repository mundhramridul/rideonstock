<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);
$html = '';
//$html .= '<li>';
//$html .= '<img src="down.png">';
$html .= '<h3><font color=red>increment(+percent%)</font></h3>';

        
//$html .= '</li>';

$result = mysql_query("SELECT Price 
    FROM pidilite
    WHERE Time=
      (SELECT max(Time)
      FROM pidilite
      WHERE Date=(SELECT max(Date)
    FROM pidilite )) AND Date=
      (SELECT max(Date)
       FROM pidilite)");
$row= mysql_fetch_assoc($result);
$temp1=floatval($row['Price']);

$result1 = mysql_query("SELECT Price 
    FROM pidilite
    WHERE Time=
      (SELECT max(Time) FROM pidilite
      WHERE Date=(SELECT max(Date) FROM pidilite
       Where Date < ( SELECT max(Date) from pidilite)))
       AND Date=
      (SELECT max(Date) FROM pidilite
       Where Date < ( SELECT max(Date) from pidilite))");

$row1= mysql_fetch_assoc($result1);
$temp2=floatval($row1['Price']);
$increment=round(($temp1 - $temp2),3);
$percent1 = (($temp1 - $temp2)/$temp2)*100;
$percent= round($percent1,3);
//$percent=$percent*(-1);
//echo $percent;

			//$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['function']).'&lang=en';


			// Insert Name
			
			$output = str_replace('percent',$percent, $html);
                        $output = str_replace('increment', $increment, $output);
                       // $output = str_replace('+', '', $output);
                        if($percent>0)
                        {
                            
                            $output = str_replace('red', 'green', $output);
                            
                            
                        }
                        else 
                            {$output = str_replace('+', '', $output);}
			
			// Insert Function

			//$output = str_replace('functionString', $display_function, $output);


			// Insert URL

			//$output = str_replace('urlString', $display_url, $output);


			// Output

			echo($output);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>