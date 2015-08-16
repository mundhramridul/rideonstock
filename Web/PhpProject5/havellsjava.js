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
				url: "havellscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "havellsprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsper").html(html);
				}
			});
                        
		  
	}