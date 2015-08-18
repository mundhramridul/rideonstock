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
				url: "airtelcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "airtelprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelper").html(html);
				}
			});
                        
		  
	}