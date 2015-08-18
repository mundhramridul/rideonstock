google.load('visualization', '1', {'packages':['corechart']});

    
// Set a callback to run when the Google Visualization API is loaded.
  
  google.setOnLoadCallback(drawChart);

   
 function drawChart() {

       
 var jsonData = $.ajax({
        
  url: "chart1.php",
     
     dataType:"json",
    
      async: false,
      
    cache: false
          }).responseText;

   
   // Create our data table out of JSON data loaded from server.
   
   var data = new google.visualization.DataTable(jsonData);

       
 var options = {
        
   title: 'Nifty',
     
    hAxis: { textPosition: 'none' },
  
        width: 350,
         
 height: 200
        };

  
    // Instantiate and draw our chart, passing in some options.
  
    var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));
   
   chart.draw(data, options);
    }
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


