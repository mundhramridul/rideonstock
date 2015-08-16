/* JS File */

// Start Ready
$(document).ready(function() {  
		

setInterval(search1,3000);
setInterval(search2,3000);
setInterval(search3,3000);
	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#search').focus();
	
	 
	});	
	

	// Live Search
	// On Search Submit and Get Results
    function search() {
	    var query_value = $('input#search').val();
	    $('b#search-string').html(query_value);
		
		if(query_value !== ''){
			$.ajax({	
				type: "POST",
				url: "search.php",
				data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#results").html(html);
				}
			});
		}return false;    
	}

	$("input#search").live("keyup", function(e) {
		// Set Timeout
	    clearTimeout($.data(this, 'timer'));

	    // Set Search String
	    var search_string = $(this).val();

	    // Do Search
	    if (search_string == '') {
	    	$("ul#results").fadeOut();
	    	$('h4#results-text').fadeOut();
	    }else{
	    	$("ul#results").fadeIn();
	    	$('h4#results-text').fadeIn();
	    	$(this).data('timer', setTimeout(search, 100));
	    };
	    
	});





function search1() {

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

function search2() {

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

					$("ul#result1").html(html);

				}
			
});
}
function search3() {

	   // var query_value = $('input#search').val();

	   // $('b#search-string').html(query_value);

		//alert("this is working");

		
			$.ajax({
	
				type: "POST",

				url: "price2.php",

				//data: { query: query_value },

				cache: false,

				

				success: function(html)

				{

					$("ul#result2").html(html);

				}
			
});
}
});