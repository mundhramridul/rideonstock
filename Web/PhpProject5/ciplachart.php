<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);

$result = mysql_query('SELECT Price , Date , Time FROM cipla');

$table = array();
$table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
     array('label' => 'Date', 'type' => 'string'),
    array('label' => 'Price', 'type' => 'number')
);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $temp = array();
    $ut=$r['Date'];
    $ut.=" ";
    $ut.=$r['Time'];
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $ut);

    // Values of each slice
    $temp[] = array('v' => (float) $r['Price']);    
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
echo $jsonTable;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
