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
				url: "icicicurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#icicicurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "iciciprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciper").html(html);
				}
			});
                        
		  
	}