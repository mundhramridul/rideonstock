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
				url: "tatacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tatacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "tataprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataper").html(html);
				}
			});
                        
		  
	}