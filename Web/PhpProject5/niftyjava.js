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
				url: "price1.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#price1").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "niftyprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#niftyprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "niftyopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#niftyopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "niftyaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#niftyaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "niftyper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#niftyper").html(html);
				}
			});
                        
		  
	}