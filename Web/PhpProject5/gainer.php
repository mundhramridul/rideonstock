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

$html .= '<p>nameString   percentage%</p>';
$html .= '';

$result = mysql_query("SELECT Name,Percentage
FROM change1 
WHERE  Cur_date=(SELECT max(Cur_date)
    FROM change1) AND Percentage=( SELECT max(Percentage) FROM change1 Where Cur_date=(SELECT max(Cur_date)
    FROM change1)) ");

$row= mysql_fetch_assoc($result);


$per=$row['Percentage'];

if($row['Percentage']>0)
{
    $display_name = $row['Name'];
$output = str_replace('nameString', $display_name, $html);
$output1 = str_replace('percentage', $per, $output);
}
else
{
    
   $output1 = str_replace('nameString   percentage%','No Gainer', $html); 
    
}
echo $output1;


?>
