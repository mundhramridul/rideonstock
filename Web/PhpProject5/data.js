/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
$(function() {
  //alert('got here');
  
  $("#datepicker").datepicker({
    onSelect: function(dateText, inst) {
      $('#title').text("You picked: " + dateText);
    }
  });
});


  

	// Icon Click Focus
	
     
	    
	    
	 
        



