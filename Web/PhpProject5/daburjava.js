/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
  $(document).ready(function(){
               
                setInterval(search,3000);
            });

function search() {
	   // var query_value = $('input#search').val();
	   // $('b#search-string').html(query_value);
		//alert("this is working");
		
			$.ajax({	
				type: "POST",
				url: "daburcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "daburprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburper").html(html);
				}
			});
                        
		  
	}