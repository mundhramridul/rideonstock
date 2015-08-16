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
				url: "axiscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axiscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "axisprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "axisper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#axisper").html(html);
				}
			});
			
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
			
			
			$.ajax({	
				type: "POST",
				url: "airtelcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "airtelprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "airtelper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#airtelper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "ambujacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ambujaper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ambujaper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "asiancurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asiancurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "asianprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "asianper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#asianper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "bajajcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "bajajprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "bajajper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#bajajper").html(html);
				}
			});
			
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
			
			$.ajax({	
				type: "POST",
				url: "ciplacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ciplaper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ciplaper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "daburcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "daburprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "daburper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#daburper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "dlfcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "dlfprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "dlfper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#dlfper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "havellscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "havellsprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "havellsper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#havellsper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "hdfccurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfccurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hdfcper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hdfcper").html(html);
				}
			});
			
			
			$.ajax({	
				type: "POST",
				url: "herocurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#herocurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "heroprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "heroper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#heroper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "hindustancurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustancurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "hindustanper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#hindustanper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "icicicurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#icicicurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "iciciprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "iciciper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#iciciper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "infosyscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosyscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "infosysprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "infosysper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#infosysper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "jaiprakashcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jaiprakashper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jaiprakashper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "jindalcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jindalprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jindalper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jindalper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "jswcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "jswprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "jswper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#jswper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "ltcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "ltprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "ltper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#ltper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "tcscurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcscurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "tcsprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tcsper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tcsper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "tatacurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tatacurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "tataprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "tataper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#tataper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "sensexcurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexcurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "sensexprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sensexper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sensexper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "sbicurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbicurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "sbiprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "sbiper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#sbiper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "reliancecurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#reliancecurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "relianceprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "relianceper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#relianceper").html(html);
				}
			});
			
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
			
			$.ajax({	
				type: "POST",
				url: "pidilitecurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidilitecurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "pidiliteper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#pidiliteper").html(html);
				}
			});
			
			$.ajax({	
				type: "POST",
				url: "niftycurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#niftycurr").html(html);
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
			
			$.ajax({	
				type: "POST",
				url: "maruticurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#maruticurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "marutiprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "marutiper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#marutiper").html(html);
				}
			});
                 
 $.ajax({	
				type: "POST",
				url: "rupeecurr.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#rupeecurr").html(html);
				}
			});
                        
                      
                        
                        $.ajax({	
				type: "POST",
				url: "rupeeprev.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#rupeeprev").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "rupeeopen.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#rupeeopen").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "rupeeaction.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#rupeeaction").html(html);
				}
			});
                        
                        $.ajax({	
				type: "POST",
				url: "rupeeper.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#rupeeper").html(html);
				}
			});		 
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
				url: "per2.php",
				//data: { query: query_value },
				cache: false,
				
				success: function(html)
				{
					$("ul#per2").html(html);
				}
			});
		  
	}