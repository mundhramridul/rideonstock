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
				url: "asiancurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asiancurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "asianprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianper").html(html);
				}
			});
                        
		  
	}