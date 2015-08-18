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
				url: "tcscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "tcsprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsper").html(html);
				}
			});
                        
		  
	}