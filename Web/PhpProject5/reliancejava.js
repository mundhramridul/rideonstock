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
				url: "reliancecurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#reliancecurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "relianceprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceper").html(html);
				}
			});
                        
		  
	}