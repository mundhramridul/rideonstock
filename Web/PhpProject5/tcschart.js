google.load('visualization', '1', {'packages':['corechart']});

    
// Set a callback to run when the Google Visualization API is loaded.
  
  google.setOnLoadCallback(drawChart);

   
 function drawChart() {

       
 var jsonData = $.ajax({
        
  url: "tcschart.php",
     
     dataType:"json",
    
      async: false,
      
    cache: false
          }).responseText;

   
   // Create our data table out of JSON data loaded from server.
   
   var data = new google.visualization.DataTable(jsonData);

       
 var options = {
        
   title: 'TCS',
     
    hAxis: { textPosition: 'none' },
  
        width: 550,
         
 height: 300
        };

  
    // Instantiate and draw our chart, passing in some options.
  
    var chart = new google.visualization.LineChart(document.getElementById('tcschart'));
   
   chart.draw(data, options);
    }
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


