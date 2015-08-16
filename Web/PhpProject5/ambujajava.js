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
				url: "ambujacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaper").html(html);
				}
			});
                        
		  
	}