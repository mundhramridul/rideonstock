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
    FROM tcs
    WHERE Time=
      (SELECT max(Time) FROM tcs
      WHERE Date=(SELECT max(Date) FROM tcs
       Where Date < ( SELECT max(Date) from tcs)))
       AND Date=
      (SELECT max(Date) FROM tcs
       Where Date < ( SELECT max(Date) from tcs))");
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
