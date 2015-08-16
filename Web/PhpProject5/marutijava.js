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
				url: "maruticurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#maruticurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "marutiprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiper").html(html);
				}
			});
                        
		  
	}