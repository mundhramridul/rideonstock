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
				url: "pidilitecurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidilitecurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteper").html(html);
				}
			});
                        
		  
	}