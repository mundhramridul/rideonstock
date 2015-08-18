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
				url: "sbicurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbicurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "sbiprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiper").html(html);
				}
			});
                        
		  
	}