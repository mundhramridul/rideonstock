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
				url: "jaiprakashcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashper").html(html);
				}
			});
                        
		  
	}