<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("company_data", $con);
$html = '';
$html .= '<li>';
$html .= '<h3>nameString</h3>';
$html .= '</li>';

$result = mysql_query("SELECT distinct(data) 
    FROM maruti order by date desc");
   

while($result1 = mysql_fetch_assoc($result))
 	{
		$result_array[] = $result1;
	//mysql_close($con);
 	}

//$row= mysql_fetch_assoc($result);
        
        foreach ($result_array as $result) 
		{
                    $display_name = $result['data'];
                        $output = str_replace('nameString', $display_name, $html);
                            echo($output);
            
        }


?>