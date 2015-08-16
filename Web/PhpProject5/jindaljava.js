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
				url: "jindalcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jindalprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalper").html(html);
				}
			});
                        
		  
	}