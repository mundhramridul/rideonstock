  $(document).ready(function(){
               
                setInterval(search,3000);
            });

function search() {
$.ajax({	
				type: "POST",
				url: "per.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#per").html(html);
				}
			});
			
			 $.ajax({	
				type: "POST",
				url: "per1.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#per1").html(html);
				}
			});
			 $.ajax({	
				type: "POST",
				url: "pre2.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#per2").html(html);
				}
			});
			
			}
			
			