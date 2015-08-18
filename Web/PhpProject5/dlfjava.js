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
				url: "dlfcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "dlfprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "axiscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axiscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "axisprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisper").html(html);
				}
			});
                        
		  
	}