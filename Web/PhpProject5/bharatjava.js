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
				url: "bharatcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bharatcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "bharatprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bharatprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bharatopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bharatopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bharataction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bharataction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bharatper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bharatper").html(html);
				}
			});
                        
		  
	}