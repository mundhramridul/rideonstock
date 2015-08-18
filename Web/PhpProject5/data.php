<!doctype html>  
 <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$company = $_POST['company'];
    $s1 = $_POST['date2'];
    
    $date1 = DateTime::createFromFormat('m/d/Y', $s1);
 $s=(string) $date1->format('Y-m-d');
  
    $check=strtotime("2013-11-13");
    $date = strtotime($s);
    $html = '';
    $html .= '<h3>nameString</h3>';
    if( $date > $check )
    {
       
        
    

mysql_select_db("rideonstock", $con);
        
        if (strlen($company) >= 1 && $company !== ' ')
 {
	//$query = 'SELECT Name FROM company_name WHERE Name LIKE "%'.$search_string.'%"';
	$row = mysql_query('SELECT Price FROM '.$company.' WHERE  Date = "'.$s.'" AND Time=(SELECT max(Time) FROM '.$company.' WHERE  Date = "'.$s.'")');
       // $result= mysql_fetch_assoc($row);
        
        while($result = mysql_fetch_assoc($row))
 	{
		$result_array[] = $result;
	//mysql_close($con);
 	}
	//echo $result['Price'];
	if (isset($result_array)) 
	{
            foreach ($result_array as $result) 
		{
		 //echo "working";
		//echo $result['Price'];
			$display_name =$result['Price'];	
			
                        $output = str_replace('nameString', $display_name, $html);
			
                        
                       echo($output);

                }
		

	}else
	{       
		$output = str_replace('nameString', '<b>No Results Found.</b>', $html);
                echo $output;
               // echo " no result found";
	}
}

    }
    else
    {

mysql_select_db("previous_stock", $con); 

if (strlen($company) >= 1 && $company !== ' ')
 {
	//$query = 'SELECT Name FROM company_name WHERE Name LIKE "%'.$search_string.'%"';
	$row = mysql_query('SELECT Close FROM '.$company.' WHERE  Date = "'.$s.'"');
       // $result= mysql_fetch_assoc($row);
        
        while($result = mysql_fetch_assoc($row))
 	{
		$result_array[] = $result;
	//mysql_close($con);
 	}
	//echo $result['Price'];
	if (isset($result_array)) 
	{
            foreach ($result_array as $result) 
		{
		 //echo "working";
		//echo $result['Price'];
			$display_name =$result['Close'];	
			
                        $output = str_replace('nameString', $display_name, $html);
			
                        
                       echo($output);

                }
		

	}else
	{       
		$output = str_replace('nameString', '<b>No Results Found.</b>', $html);
                echo $output;
               // echo " no result found";
	}
        
    }
    }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
