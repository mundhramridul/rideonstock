
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

@WebServlet(name = "Axis", urlPatterns = {"/Axis"})
public class Axis extends HttpServlet {

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
    
        
        response.setIntHeader("Refresh", 200);
  
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
         String connectionURL="jdbc:mysql://localhost:3306/rideonstock";
         Connection connection;
         Statement statement;
         double value = 0;
       DateFormat dateFormat = new SimpleDateFormat("yyyy-MM-dd");
                    DateFormat dateFormat1 = new SimpleDateFormat("HH:mm:ss");
        try { 
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            connection = DriverManager.getConnection(connectionURL, "root", "");
            statement=connection.createStatement();
      
            String strTemp = "";
           String str = "						<div class=\"FL PR5 PL5 (\\w)D_30\"><span id=\"Bse_Prc_tick\"><strong>(\\d+)(.)(\\d+)</strong></span></div>";
           Pattern r = Pattern.compile(str);
           String i;
           
           
          
           //Axis bank 
            URL my_url = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/axisbank/AB16");
            BufferedReader br = new BufferedReader(new InputStreamReader(my_url.openStream()));
           Date date = new Date();
           while(null != (strTemp = br.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Axis Bank :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }
           String date1=dateFormat.format(date);
           String date2=dateFormat1.format(date);
           
          String sql1="INSERT INTO axis_bank VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql1); 
            
            //Tata steel
             URL my_url1 = new URL("http://www.moneycontrol.com/india/stockpricequote/steellarge/tatasteel/TIS");
            BufferedReader br1 = new BufferedReader(new InputStreamReader(my_url1.openStream()));
          while(null != (strTemp = br1.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Tata Steel :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql2="INSERT INTO tata_steel VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql2);
        //bharat petroleum 
            URL my_url2 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/bharatpetroleumcorporation/BPC");
            BufferedReader br2 = new BufferedReader(new InputStreamReader(my_url2.openStream()));
          while(null != (strTemp = br2.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bharat Petroleum Corporation :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql3="INSERT INTO bharat_petroleum VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql3);
            
            //reliance
            URL my_url3 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/relianceindustries/RI");
            BufferedReader br3 = new BufferedReader(new InputStreamReader(my_url3.openStream()));
          while(null != (strTemp = br3.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Reliance :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql4="INSERT INTO reliance VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql4);
//Jaiprakash
        URL my_url4 = new URL("http://www.moneycontrol.com/india/stockpricequote/infrastructuregeneral/jaiprakashassociates/JA02");
            BufferedReader br4 = new BufferedReader(new InputStreamReader(my_url4.openStream()));
          while(null != (strTemp = br4.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Jaiprakash :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql5="INSERT INTO jaiprakash VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql5);
            
            //sbi
            URL my_url5 = new URL("http://www.moneycontrol.com/india/stockpricequote/bankspublicsector/statebankindia/SBI");
            BufferedReader br5 = new BufferedReader(new InputStreamReader(my_url5.openStream()));
          while(null != (strTemp = br5.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("SBI :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql6="INSERT INTO sbi VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql6);
            
            //sensex
            String str1 = "				<div class='FL (\\w)_35'><strong>(\\d+)(.)(\\d+)</strong></div>";
           Pattern r1 = Pattern.compile(str1);
           
             URL my_url6 = new URL("http://www.moneycontrol.com/indian-indices/s&p-bse-sensex-4.html");
            BufferedReader br6 = new BufferedReader(new InputStreamReader(my_url6.openStream()));
          while(null != (strTemp = br6.readLine())){
               Matcher m = r1.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Sensex :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql7="INSERT INTO sensex VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql7);
           
            //Nifty
            URL my_url7 = new URL("http://www.moneycontrol.com/nifty/nse/nifty-live");
            BufferedReader br7 = new BufferedReader(new InputStreamReader(my_url7.openStream()));
          while(null != (strTemp = br7.readLine())){
               Matcher m = r1.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Nifty :- "+m.group(2)+m.group(3)+m.group(4));
                    i = m.group(2)+m.group(3)+m.group(4);
                    
                    
                   value = Double.parseDouble(i);
                    
                    }
          
        }   
           String sql8="INSERT INTO nifty VALUES("+value+",'"+date1+"','" +date2+"');";
            statement.executeUpdate(sql8);
            
        }
        

       
        catch(ClassNotFoundException | InstantiationException | IllegalAccessException | SQLException | IOException | NumberFormatException e)
            {
                out.println("1 couldnt load db 3 "+e.getMessage());
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