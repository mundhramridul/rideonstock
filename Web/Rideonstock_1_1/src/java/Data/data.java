/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package Data;

/**
 *
 * @author Utkarsh
 */

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Utkarsh
 */

@WebServlet(name = "data", urlPatterns = {"/data"})
public class data extends HttpServlet {

    /**
     * Processes requests for both HTTP
     * <code>GET</code> and
     * <code>POST</code> methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
     @Override
     public void doGet(HttpServletRequest request,
                    HttpServletResponse response)
            throws ServletException, IOException
  {
    
        
        response.setIntHeader("Refresh", 50000000);
  
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
         String connectionURL="jdbc:mysql://localhost:3306/company_data";
         Connection connection;
         Statement statement;
         String value;
         
       DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
                    DateFormat dateFormat1 = new SimpleDateFormat("HH:mm:ss");
        try { 
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            connection = DriverManager.getConnection(connectionURL, "root", "");
            statement=connection.createStatement();
            String i;
            String strTemp = "";
           String str = "<a href=\"(.*)\" target=\"_blank\" class=\"bl_12\" title=\"(.*)\">(.*)</a>";
           Pattern r = Pattern.compile(str);
           
           
           
          
           //Axis bank 
            URL my_url = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/axisbank/AB16");
            BufferedReader br = new BufferedReader(new InputStreamReader(my_url.openStream()));
           Date date = new Date();
           
           String date1=dateFormat.format(date);
           String date2=dateFormat1.format(date);
           while(null != (strTemp = br.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Axis Bank :- "+m.group(3));
                    i = m.group(3);
                    String sql1="INSERT INTO axis_bank VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql1); 
                    break;
                                      
                    }
          
        }
           
           
         //
            
            //Tata steel
             URL my_url1 = new URL("http://www.moneycontrol.com/india/stockpricequote/steellarge/tatasteel/TIS");
            BufferedReader br1 = new BufferedReader(new InputStreamReader(my_url1.openStream()));
          while(null != (strTemp = br1.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Tata Steel :- "+m.group(3));
                    i = m.group(3);
                    String sql2="INSERT INTO tata_steel VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql2);
                    break;
                    
                    }
          
        }   
           
           
           
          
        //bharat petroleum 
            URL my_url2 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/bharatpetroleumcorporation/BPC");
            BufferedReader br2 = new BufferedReader(new InputStreamReader(my_url2.openStream()));
          while(null != (strTemp = br2.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bharat Petroleum Corporation :- "+m.group(3));
                    i = m.group(3);
                    String sql3="INSERT INTO bharat_petroleum VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql3);
                    break;
                    
                    }
          
        }   
           
            
            //reliance
            URL my_url3 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/relianceindustries/RI");
            BufferedReader br3 = new BufferedReader(new InputStreamReader(my_url3.openStream()));
          while(null != (strTemp = br3.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Reliance :- "+m.group(3));
                    i = m.group(3);
                    String sql4="INSERT INTO reliance VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql4);
                    break;
                    }
          
        }   
           
//Jaiprakash
        URL my_url4 = new URL("http://www.moneycontrol.com/india/stockpricequote/infrastructuregeneral/jaiprakashassociates/JA02");
            BufferedReader br4 = new BufferedReader(new InputStreamReader(my_url4.openStream()));
          while(null != (strTemp = br4.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Jaiprakash :- "+m.group(3));
                    i = m.group(3);
                    String sql5="INSERT INTO jaiprakash VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql5);
                    break;
                    }
          
        }   
           
            
            //sbi
            URL my_url5 = new URL("http://www.moneycontrol.com/india/stockpricequote/bankspublicsector/statebankindia/SBI");
            BufferedReader br5 = new BufferedReader(new InputStreamReader(my_url5.openStream()));
          while(null != (strTemp = br5.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("SBI :- "+m.group(3));
                    i = m.group(3);
                    String sql6="INSERT INTO sbi VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql6);
                    break;
                    }
          
        }   
           
        
            // ICICI Bank
            
             URL my_url9 = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/icicibank/ICI02");
            BufferedReader br9 = new BufferedReader(new InputStreamReader(my_url9.openStream()));
          while(null != (strTemp = br9.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("ICICI Bank :- "+m.group(3));
                    i = m.group(3);
                    String sql10="INSERT INTO icici_bank VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql10);
                    break;
                    }
          
        }   
          
       
            // Asian paints
            URL my_url10 = new URL("http://www.moneycontrol.com/india/stockpricequote/paintsvarnishes/asianpaints/AP31");
            BufferedReader br10 = new BufferedReader(new InputStreamReader(my_url10.openStream()));
          while(null != (strTemp = br10.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Asian Paints :- "+m.group(3));
                    i = m.group(3);
                    String sql11="INSERT INTO asian_paints VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql11);
                    break;
                    }
          
        }   
          
            
            // Havells india
            URL my_url11 = new URL("http://www.moneycontrol.com/india/stockpricequote/electricequipment/havellsindia/HI01");
            BufferedReader br11 = new BufferedReader(new InputStreamReader(my_url11.openStream()));
          while(null != (strTemp = br11.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Havells India :- "+m.group(3));
                    i = m.group(3);
                    String sql12="INSERT INTO havells VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql12);
                    break;
                    }
          
        }   
           
            
                       // Maruti Suzuki
            URL my_url12 = new URL("http://www.moneycontrol.com/india/stockpricequote/autocarsjeeps/marutisuzukiindia/MS24");
            BufferedReader br12 = new BufferedReader(new InputStreamReader(my_url12.openStream()));
          while(null != (strTemp = br12.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Maruti Suzuki :- "+m.group(3));
                    i = m.group(3);
                    String sql13="INSERT INTO maruti VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql13);
                    break;
                    }
          
        }   
           
            
                       // Hero Motorcorp
            URL my_url13 = new URL("http://www.moneycontrol.com/india/stockpricequote/auto23wheelers/heromotocorp/HHM");
            BufferedReader br13 = new BufferedReader(new InputStreamReader(my_url13.openStream()));
          while(null != (strTemp = br13.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Hero Motorcorp :- "+m.group(3));
                    i = m.group(3);
                    String sql14="INSERT INTO hero VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql14);
                    break;
                    }
          
        }   
           
            
                       // ACC
            URL my_url14 = new URL("http://www.moneycontrol.com/india/stockpricequote/cementmajor/acc/ACC06");
            BufferedReader br14 = new BufferedReader(new InputStreamReader(my_url14.openStream()));
          while(null != (strTemp = br14.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("ACC :- "+m.group(3));
                    i = m.group(3);
                    String sql15="INSERT INTO acc VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql15);
                    break;
                    }
          
        }   
           
            
                       // Bajaj Auto
            URL my_url15 = new URL("http://www.moneycontrol.com/india/stockpricequote/auto23wheelers/bajajauto/BA10");
            BufferedReader br15 = new BufferedReader(new InputStreamReader(my_url15.openStream()));
          while(null != (strTemp = br15.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bajaj Auto :- "+m.group(3));
                    i = m.group(3);
                    String sql16="INSERT INTO bajaj_auto VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql16);
                    break;
                    }
          
        }   
           
            
                        // Larsen and Toubro
            URL my_url16 = new URL("http://www.moneycontrol.com/india/stockpricequote/infrastructuregeneral/larsentoubro/LT");
            BufferedReader br16 = new BufferedReader(new InputStreamReader(my_url16.openStream()));
          while(null != (strTemp = br16.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Larsen and Toubro :- "+m.group(3));
                    i = m.group(3);
                    String sql17="INSERT INTO lt VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql17);
                    break;                    
                    }
          
        }   
           
            
                         // Dabur India
            URL my_url17 = new URL("http://www.moneycontrol.com/india/stockpricequote/personalcare/daburindia/DI");
            BufferedReader br17 = new BufferedReader(new InputStreamReader(my_url17.openStream()));
          while(null != (strTemp = br17.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Dabur India :- "+m.group(3));
                    i = m.group(3);
                    String sql18="INSERT INTO dabur VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql18);
                    break;                    
                    }
          
        }   
           
            
              // Infosys
            URL my_url18 = new URL("http://www.moneycontrol.com/india/stockpricequote/computerssoftware/infosys/IT");
            BufferedReader br18 = new BufferedReader(new InputStreamReader(my_url18.openStream()));
          while(null != (strTemp = br18.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Infosys :- "+m.group(3));
                    i = m.group(3);
                    String sql19="INSERT INTO infosys VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql19);
                    break;
                    }
          
        }   
           
            
              // Ranbaxy
            URL my_url19 = new URL("http://www.moneycontrol.com/india/stockpricequote/pharmaceuticals/ranbaxylaboratories/RL");
            BufferedReader br19 = new BufferedReader(new InputStreamReader(my_url19.openStream()));
          while(null != (strTemp = br19.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Ranbaxy :- "+m.group(3));
                    i = m.group(3);
                    String sql20="INSERT INTO ranbaxy VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql20);
                    break;
                    }
          
        }   
           
            
            // Jsw Steel
            URL my_url20 = new URL("http://www.moneycontrol.com/india/stockpricequote/steellarge/jswsteel/JSW01");
            BufferedReader br20 = new BufferedReader(new InputStreamReader(my_url20.openStream()));
          while(null != (strTemp = br20.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("JSW Steel :- "+m.group(3));
                    i = m.group(3);
                    String sql21="INSERT INTO jsw VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql21);
                    break;
                    }
          
        }   
             
       
             // Jindal Steel And Power
            URL my_url21 = new URL("http://www.moneycontrol.com/india/stockpricequote/steelspongeiron/jindalsteelpower/JSP");
            BufferedReader br21 = new BufferedReader(new InputStreamReader(my_url21.openStream()));
          while(null != (strTemp = br21.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Jindal Steel And Power :- "+m.group(3));
                    i = m.group(3);
                    String sql22="INSERT INTO jindal_steel VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql22);
                    break;
                    }
          
        }   
           
            
             // Bharti Airtel
            URL my_url22 = new URL("http://www.moneycontrol.com/india/stockpricequote/telecommunicationsservice/bhartiairtel/BA08");
            BufferedReader br22 = new BufferedReader(new InputStreamReader(my_url22.openStream()));
          while(null != (strTemp = br22.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bharti Airtel :- "+m.group(3));
                    i = m.group(3);
                    String sql23="INSERT INTO airtel VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql23);
                    break;
                    }
          
        }   
          
            
             // DLF
            URL my_url23 = new URL("http://www.moneycontrol.com/india/stockpricequote/constructioncontractingrealestate/dlf/D04");
            BufferedReader br23 = new BufferedReader(new InputStreamReader(my_url23.openStream()));
          while(null != (strTemp = br23.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("DLF :- "+m.group(3));
                    i = m.group(3);
                    String sql24="INSERT INTO dlf VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql24);
                    break;
                    }
          
        }   
           
            
             // Ambuja Cement
            URL my_url24 = new URL("http://www.moneycontrol.com/india/stockpricequote/cementmajor/ambujacements/AC18");
            BufferedReader br24 = new BufferedReader(new InputStreamReader(my_url24.openStream()));
          while(null != (strTemp = br24.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Ambuja Cement :- "+m.group(3));
                    i = m.group(3);
                    String sql25="INSERT INTO ambuja_cement VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql25);
                    break;
                    }
          
        }   
           
            
            // Cipla
            URL my_url25 = new URL("http://www.moneycontrol.com/india/stockpricequote/pharmaceuticals/cipla/C");
            BufferedReader br25 = new BufferedReader(new InputStreamReader(my_url25.openStream()));
          while(null != (strTemp = br25.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Cipla :- "+m.group(3));
                    i = m.group(3);
                    String sql26="INSERT INTO cipla VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql26);
                    break;
                    }
          
        }   
           
            
            // TCS
            URL my_url26 = new URL("http://www.moneycontrol.com/india/stockpricequote/computerssoftware/tataconsultancyservices/TCS");
            BufferedReader br26 = new BufferedReader(new InputStreamReader(my_url26.openStream()));
          while(null != (strTemp = br26.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("TCS :- "+m.group(3));
                    i = m.group(3);
                    String sql27="INSERT INTO tcs VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql27);
                    break;
                    }
          
        }   
           
            
            // HDFC Bank
            URL my_url27 = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/hdfcbank/HDF01");
            BufferedReader br27 = new BufferedReader(new InputStreamReader(my_url27.openStream()));
          while(null != (strTemp = br27.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" HDFC Bank :- "+m.group(3));
                    i = m.group(3);
                    String sql28="INSERT INTO hdfc_bank VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql28);
                    break;
                    }
          
        }   
           
            
            // Pidilite Industries
            URL my_url28 = new URL("http://www.moneycontrol.com/india/stockpricequote/chemicals/pidiliteindustries/PI11");
            BufferedReader br28 = new BufferedReader(new InputStreamReader(my_url28.openStream()));
          while(null != (strTemp = br28.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Pidilite Industries :- "+m.group(3));
                    i = m.group(3);
                    String sql29="INSERT INTO pidilite VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql29);
                    break;
                    }
          
        }   
           
            
            // HIndustan Unilever
            URL my_url29 = new URL("http://www.moneycontrol.com/india/stockpricequote/personalcare/hindustanunilever/HU");
            BufferedReader br29 = new BufferedReader(new InputStreamReader(my_url29.openStream()));
          while(null != (strTemp = br29.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Hindustan Unilever :- "+m.group(3));
                    i = m.group(3);
                    String sql30="INSERT INTO hindustan_unilever VALUES('"+i+"','"+date1+"','" +date2+"');";
                    statement.executeUpdate(sql30);
                    break;
                    }
          
        }   
           
            
    /*        //sensex
            String str1 = "				<div class='FL (r|gr)_35'><strong>(\\d+)(.)(\\d+)</strong></div>";
           Pattern r1 = Pattern.compile(str1);
           
             URL my_url6 = new URL("http://www.moneycontrol.com/indian-indices/s&p-bse-sensex-4.html");
            BufferedReader br6 = new BufferedReader(new InputStreamReader(my_url6.openStream()));
          while(null != (strTemp = br6.readLine())){
               Matcher m = r1.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Sensex :- "+m.group(3));
                    i = m.group(3);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql7="INSERT INTO sensex VALUES('"+i+"','"+date1+"','" +date2+"');";
            statement.executeUpdate(sql7);
           
            //Nifty
            URL my_url7 = new URL("http://www.moneycontrol.com/nifty/nse/nifty-live");
            BufferedReader br7 = new BufferedReader(new InputStreamReader(my_url7.openStream()));
          while(null != (strTemp = br7.readLine())){
               Matcher m = r1.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Nifty :- "+m.group(3));
                    i = m.group(3);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql8="INSERT INTO nifty VALUES('"+i+"','"+date1+"','" +date2+"');";
            statement.executeUpdate(sql8);
         
           // currency
            // indian-rupee
           String str2 = "								<span class='(r|gr)_20'><strong>(\\d+)(.)(\\d+)</strong></span> ";
           Pattern r2 = Pattern.compile(str2);
           
             URL my_url8 = new URL("http://www.moneycontrol.com/currency/mcx-usdinr-price.html");
            BufferedReader br8 = new BufferedReader(new InputStreamReader(my_url8.openStream()));
          while(null != (strTemp = br8.readLine())){
               Matcher m = r2.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Dollar-Rupee :- "+m.group(3));
                    i = m.group(3);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql9="INSERT INTO rupee VALUES('"+i+"','"+date1+"','" +date2+"');";
            statement.executeUpdate(sql9); 
            */
        }
        

       
        catch(ClassNotFoundException | InstantiationException | IllegalAccessException | SQLException | IOException | NumberFormatException e)
            {
                out.println("1 couldnt load db "+e.getMessage());
            }
        
        
            
            /* TODO output your page here. You may use following sample code. */
            
         finally {            
            out.close();
        }
    }
     @Override
      public void doPost(HttpServletRequest request,
                     HttpServletResponse response)
      throws ServletException, IOException {
     doGet(request, response);
  }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    

    /**
     * Handles the HTTP
     * <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
   
}
