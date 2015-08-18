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
				url: "herocurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#herocurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "heroprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroper").html(html);
				}
			});
                        
		  
	}