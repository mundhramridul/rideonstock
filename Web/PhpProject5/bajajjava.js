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
				url: "bajajcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "bajajprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajper").html(html);
				}
			});
                        
		  
	}