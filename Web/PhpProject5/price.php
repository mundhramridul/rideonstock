<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);
$html = '';
$html .= '<li>';
$html .= '<h3>nameString</h3>';
$html .= '</li>';

$result = mysql_query("SELECT Price 
    FROM sensex
    WHERE Time=
      (SELECT max(Time)
      FROM Sensex
      WHERE Date=(SELECT max(Date)
    FROM Sensex ))
       AND Date=
      (SELECT max(Date)
       FROM Sensex)");
$row= mysql_fetch_assoc($result);

$display_name = $row['Price'];

			//$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['function']).'&lang=en';


			// Insert Name
			
			$output = str_replace('nameString', $display_name, $html);

			
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
