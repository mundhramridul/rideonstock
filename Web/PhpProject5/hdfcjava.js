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
				url: "hdfccurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfccurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcper").html(html);
				}
			});
                        
		  
	}