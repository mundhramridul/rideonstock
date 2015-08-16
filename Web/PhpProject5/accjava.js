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
				url: "acccurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#acccurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "accprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#accprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "accopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#accopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "accaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#accaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "accper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#accper").html(html);
				}
			});
                        
		  
	}