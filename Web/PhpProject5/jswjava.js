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
				url: "jswcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jswprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswper").html(html);
				}
			});
                        
		  
	}