/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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


@WebServlet(name = "demo", urlPatterns = {"/demo"})
public class demo extends HttpServlet{
  @Override
     public void doGet(HttpServletRequest request,
                    HttpServletResponse response)
            throws ServletException, IOException
  {
    
        
        response.setIntHeader("Refresh", 45);
  
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
              String str = "						<div class=\\\"FL gL_13 PT15\\\"> <span class=\\\"(r|gr)_15 (dn|up)arw_pc\"><strong>(-|)(\\d+)(.)(\\d+)</strong></span> (\\()(.)()(\\d+)(.)(\\d+)%(\\)</div>)";
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
                     
                    out.println("Axis Bank :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                      
                   }
                     break;
                    }
          
        }
           String date1=dateFormat.format(date);
         
           
          String sql1="INSERT INTO change1 VALUES('Axis Bank',"+value+",'" +date1+"');";
            statement.executeUpdate(sql1);
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
}

