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
				url: "infosyscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosyscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "infosysprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysper").html(html);
				}
			});
                        
		  
	}