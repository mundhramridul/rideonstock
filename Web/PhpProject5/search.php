<?php

 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("rideonstock", $con);




$html = '';
$html .= '<li class="result">';
$html .= '<a href="#acc cement">';
$html .= '<h2>nameString</h2></a>';
$html .= '</li>';




$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);

//$search_string = real_escape_string($search_string1);

//$search_string='ax';


if (strlen($search_string) >= 1 && $search_string !== ' ')
 {
	//$query = 'SELECT Name FROM company_name WHERE Name LIKE "%'.$search_string.'%"';
	$result = mysql_query('SELECT Name,link FROM company_name WHERE Name LIKE "%'.$search_string.'%"');
       // $row= mysql_fetch_assoc($result);
	while($result1 = mysql_fetch_assoc($result))
 	{
		$result_array[] = $result1;
	//mysql_close($con);
 	}
	if (isset($result_array)) 
	{
		foreach ($result_array as $result) 
		{
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['Name']);	
			//$display_url = 'http://localhost/PhpProject1/'.urlencode($result['link']).'';
                        $display = $result['Name'];
                        
			$output = str_replace('acc cement', $display, $html);
                        $output = str_replace('nameString', $display_name, $output);
                        //$output = str_replace('urlString', $display_url, $output);
                        echo($output);


		}

	}else
	{       $output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
                echo($output);
               // echo " no result found";
	}
}



