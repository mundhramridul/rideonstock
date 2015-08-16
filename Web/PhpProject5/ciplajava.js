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
				url: "ciplacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaper").html(html);
				}
			});
                        
		  
	}