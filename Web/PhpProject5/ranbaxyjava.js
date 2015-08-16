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
				url: "ranbaxycurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ranbaxycurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ranbaxyprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ranbaxyprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ranbaxyopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ranbaxyopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ranbaxyaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ranbaxyaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ranbaxyper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ranbaxyper").html(html);
				}
			});
                        
		  
	}