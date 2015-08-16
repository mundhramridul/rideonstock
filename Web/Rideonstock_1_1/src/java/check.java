
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
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
 * @author MUNDHRA
 */

import java.io.BufferedReader;
import java.sql.SQLException;
@WebServlet(name = "check", urlPatterns = {"/check"})
public class check extends HttpServlet {

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
    
        
        response.setIntHeader("Refresh", 1000000);
  
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
            //String strTemp1="";
           String str = "				<span class=\"(.*)bold\">(\\w*).</span>(.*)<a href=\"(.*)\">(.*)</a>(.*)";
          // String str1="				<p><a href=\"(.*)\">(.*)</a>(.*)<span (.*)\">(.*)</span></p>";
           Pattern r = Pattern.compile(str);
           //Pattern r1= Pattern.compile(str1);
           String i,i1,i2;
           
           
          
           //Axis bank 
            URL my_url = new URL("http://money.rediff.com/tips");
            BufferedReader br = new BufferedReader(new InputStreamReader(my_url.openStream()));
           Date date = new Date();
           String date1=dateFormat.format(date);
           while(null != (strTemp = br.readLine())){
               Matcher m = r.matcher(strTemp);
               //Matcher m1= r1.matcher(strTemp);
           if( m.find() )
            {
                   // out.println(m);
                    out.println("expert "+m.group(2)+m.group(5)+m.group(6));
                    i = m.group(2);
                    i1=m.group(5);
                    i2=m.group(6);
                   String sql3="INSERT INTO advice VALUES('"+i+"','"+i1+"','"+i2+"','"+date1+"');";
                   statement.executeUpdate(sql3);  
                    
                   //value = Double.parseDouble(i);
                    
                    }
          
         //  String date1=dateFormat.format(date);
          // String date2=dateFormat1.format(date);
           
          
             }
        

        }
        catch(ClassNotFoundException | InstantiationException | IllegalAccessException | SQLException | IOException | NumberFormatException e)
            {
                out.println("1 couldnt load db "+e.getMessage());
            }
        
        
            
            /* TODO output your page here. You may use following sample code. */
            
        // finally {            
         //   out.close();
        //}
   }
}


//<span class="red bold">SELL </span>  <a href="http://money.rediff.com/companies/Tata-Motors-Ltd./10510008">Tata Motors Ltd.</a> Intraday