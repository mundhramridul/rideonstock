<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);
$html = '';
//$html .= '<li>';
$html .= '<h3>nameString</h3>';
//$html .= '</li>';

$result = mysql_query("SELECT Price 
    FROM tata_steel
    WHERE Time=
      (SELECT max(Time) FROM tata_steel
      WHERE Date=(SELECT max(Date) FROM tata_steel
       Where Date < ( SELECT max(Date) from tata_steel)))
       AND Date=
      (SELECT max(Date) FROM tata_steel
       Where Date < ( SELECT max(Date) from tata_steel))");
$row= mysql_fetch_assoc($result);

$display_name = $row['Price'];

			
			
			$output = str_replace('nameString', $display_name, $html);

			
			
                        //echo('Previous Price: ');
			echo($output);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
