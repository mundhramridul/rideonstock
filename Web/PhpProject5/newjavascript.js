/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

  $(document).ready(function(){

				alert("this");
               
                setInterval(search,3000);

            });


function search() {

	   // var query_value = $('input#search').val();

	   // $('b#search-string').html(query_value);

		//alert("this is working");

		
			$.ajax({
	
				type: "POST",

				url: "price.php",

				//data: { query: query_value },

				cache: false,

				

				success: function(html)

				{

					$("ul#result").html(html);

				}
			
});
		  
	}