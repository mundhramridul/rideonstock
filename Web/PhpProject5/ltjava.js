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
				url: "ltcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ltprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltper").html(html);
				}
			});
                        
		  
	}