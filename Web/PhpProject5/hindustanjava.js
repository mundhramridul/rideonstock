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
				url: "hindustancurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustancurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanper").html(html);
				}
			});
                        
		  
	}