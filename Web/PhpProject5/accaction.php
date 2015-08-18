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
    FROM acc order by date desc");
   // WHERE Time=
   //   (SELECT max(Time)
   //   FROM axis_bank
   //   WHERE Date=(SELECT max(Date)
   // FROM axis_bank )) AND Date=
   //   (SELECT max(Date)
   //    FROM axis_bank)");

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

//$display_name = $row['data'];

			//$display_url = 'http://php.net/manual-lookup.php?pattern='.urlencode($result['function']).'&lang=en';


			// Insert Name
			
			//$output = str_replace('nameString', $display_name, $html);

			
			// Insert Function

			//$output = str_replace('functionString', $display_function, $output);


			// Insert URL

			//$output = str_replace('urlString', $display_url, $output);


			// Output

			//echo($output);
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>