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
				url: "price.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#price").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "sensexprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexper").html(html);
				}
			});
                        
		  
	}