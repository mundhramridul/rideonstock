/*
 * To change1 this template, choose Tools | Templates
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



@WebServlet(name = "percentage", urlPatterns = {"/percentage"})
public class percentage  extends HttpServlet{
  @Override
     public void doGet(HttpServletRequest request,
                    HttpServletResponse response)
            throws ServletException, IOException
  {
    
        
        response.setIntHeader("Refresh", 600);
  
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
            
            //Tata steel
             URL my_url1 = new URL("http://www.moneycontrol.com/india/stockpricequote/steellarge/tatasteel/TIS");
            BufferedReader br1 = new BufferedReader(new InputStreamReader(my_url1.openStream()));
          while(null != (strTemp = br1.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Tata Steel :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql2="INSERT INTO change1 VALUES('Tata Steel',"+value+",'" +date1+"');";
            statement.executeUpdate(sql2); 
        //bharat petroleum 
            URL my_url2 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/bharatpetroleumcorporation/BPC");
            BufferedReader br2 = new BufferedReader(new InputStreamReader(my_url2.openStream()));
          while(null != (strTemp = br2.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bharat Petroleum Corporation :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql3="INSERT INTO change1 VALUES('Bharat Petroleum',"+value+",'" +date1+"');";
            statement.executeUpdate(sql3);
            
            //reliance
            URL my_url3 = new URL("http://www.moneycontrol.com/india/stockpricequote/refineries/relianceindustries/RI");
            BufferedReader br3 = new BufferedReader(new InputStreamReader(my_url3.openStream()));
          while(null != (strTemp = br3.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Reliance :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql4="INSERT INTO change1 VALUES('Reliance',"+value+",'" +date1+"');";
            statement.executeUpdate(sql4);
//Jaiprakash
        URL my_url4 = new URL("http://www.moneycontrol.com/india/stockpricequote/infrastructuregeneral/jaiprakashassociates/JA02");
            BufferedReader br4 = new BufferedReader(new InputStreamReader(my_url4.openStream()));
          while(null != (strTemp = br4.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Jaiprakash :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql5="INSERT INTO change1 VALUES('Jaiprakash Associates',"+value+",'" +date1+"');";
            statement.executeUpdate(sql5);
            
            //sbi
            URL my_url5 = new URL("http://www.moneycontrol.com/india/stockpricequote/bankspublicsector/statebankindia/SBI");
            BufferedReader br5 = new BufferedReader(new InputStreamReader(my_url5.openStream()));
          while(null != (strTemp = br5.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("SBI :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql6="INSERT INTO change1 VALUES('SBI',"+value+",'" +date1+"');";
            statement.executeUpdate(sql6);
        
            // ICICI Bank
            
             URL my_url9 = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/icicibank/ICI02");
            BufferedReader br9 = new BufferedReader(new InputStreamReader(my_url9.openStream()));
          while(null != (strTemp = br9.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("ICICI Bank :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                    break;
            }
          
        }   
           String sql10="INSERT INTO change1 VALUES('ICICI',"+value+",'" +date1+"');";
            statement.executeUpdate(sql10);
       
            // Asian paints
            URL my_url10 = new URL("http://www.moneycontrol.com/india/stockpricequote/paintsvarnishes/asianpaints/AP31");
            BufferedReader br10 = new BufferedReader(new InputStreamReader(my_url10.openStream()));
          while(null != (strTemp = br10.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Asian Paints :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break; 
            }
          
        }   
           String sql11="INSERT INTO change1 VALUES('Asian Paints',"+value+",'" +date1+"');";;
            statement.executeUpdate(sql11);
            
            // Havells india
            URL my_url11 = new URL("http://www.moneycontrol.com/india/stockpricequote/electricequipment/havellsindia/HI01");
            BufferedReader br11 = new BufferedReader(new InputStreamReader(my_url11.openStream()));
          while(null != (strTemp = br11.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Havells India :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql12="INSERT INTO change1 VALUES('Havells India',"+value+",'" +date1+"');";
            statement.executeUpdate(sql12);
            
                       // Maruti Suzuki
            URL my_url12 = new URL("http://www.moneycontrol.com/india/stockpricequote/autocarsjeeps/marutisuzukiindia/MS24");
            BufferedReader br12 = new BufferedReader(new InputStreamReader(my_url12.openStream()));
          while(null != (strTemp = br12.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Maruti Suzuki :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql13="INSERT INTO change1 VALUES('Maruti Suzuki',"+value+",'" +date1+"');";
            statement.executeUpdate(sql13);
            
                       // Hero Motorcorp
            URL my_url13 = new URL("http://www.moneycontrol.com/india/stockpricequote/auto23wheelers/heromotocorp/HHM");
            BufferedReader br13 = new BufferedReader(new InputStreamReader(my_url13.openStream()));
          while(null != (strTemp = br13.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Hero Motorcorp :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql14="INSERT INTO change1 VALUES('Hero Motorcop',"+value+",'" +date1+"');";
            statement.executeUpdate(sql14);
            
                       // ACC
            URL my_url14 = new URL("http://www.moneycontrol.com/india/stockpricequote/cementmajor/acc/ACC06");
            BufferedReader br14 = new BufferedReader(new InputStreamReader(my_url14.openStream()));
          while(null != (strTemp = br14.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("ACC :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql15="INSERT INTO change1 VALUES('ACC',"+value+",'" +date1+"');";
            statement.executeUpdate(sql15);
            
                       // Bajaj Auto
            URL my_url15 = new URL("http://www.moneycontrol.com/india/stockpricequote/auto23wheelers/bajajauto/BA10");
            BufferedReader br15 = new BufferedReader(new InputStreamReader(my_url15.openStream()));
          while(null != (strTemp = br15.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bajaj Auto :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql16="INSERT INTO change1 VALUES('Bajaj Auto',"+value+",'" +date1+"');";
            statement.executeUpdate(sql16);
            
                        // Larsen and Toubro
            URL my_url16 = new URL("http://www.moneycontrol.com/india/stockpricequote/infrastructuregeneral/larsentoubro/LT");
            BufferedReader br16 = new BufferedReader(new InputStreamReader(my_url16.openStream()));
          while(null != (strTemp = br16.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Larsen and Toubro :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql17="INSERT INTO change1 VALUES('Larsen and Tourbo',"+value+",'" +date1+"');";
            statement.executeUpdate(sql17);
            
                         // Dabur India
            URL my_url17 = new URL("http://www.moneycontrol.com/india/stockpricequote/personalcare/daburindia/DI");
            BufferedReader br17 = new BufferedReader(new InputStreamReader(my_url17.openStream()));
          while(null != (strTemp = br17.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Dabur India :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql18="INSERT INTO change1 VALUES('Dabur India',"+value+",'" +date1+"');";
            statement.executeUpdate(sql18);
            
              // Infosys
            URL my_url18 = new URL("http://www.moneycontrol.com/india/stockpricequote/computerssoftware/infosys/IT");
            BufferedReader br18 = new BufferedReader(new InputStreamReader(my_url18.openStream()));
          while(null != (strTemp = br18.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Infosys :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql19="INSERT INTO change1 VALUES('Infosys',"+value+",'" +date1+"');";
            statement.executeUpdate(sql19);
            
              // Ranbaxy
            URL my_url19 = new URL("http://www.moneycontrol.com/india/stockpricequote/pharmaceuticals/ranbaxylaboratories/RL");
            BufferedReader br19 = new BufferedReader(new InputStreamReader(my_url19.openStream()));
          while(null != (strTemp = br19.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Ranbaxy :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql20="INSERT INTO change1 VALUES('Ranbaxy',"+value+",'" +date1+"');";
            statement.executeUpdate(sql20);
            
            // Jsw Steel
            URL my_url20 = new URL("http://www.moneycontrol.com/india/stockpricequote/steellarge/jswsteel/JSW01");
            BufferedReader br20 = new BufferedReader(new InputStreamReader(my_url20.openStream()));
          while(null != (strTemp = br20.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("JSW Steel :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                     break;
                    }
          
        }   
           String sql21="INSERT INTO change1 VALUES('JSW Steel',"+value+",'" +date1+"');";
            statement.executeUpdate(sql21);  
       
             // Jindal Steel And Power
            URL my_url21 = new URL("http://www.moneycontrol.com/india/stockpricequote/steelspongeiron/jindalsteelpower/JSP");
            BufferedReader br21 = new BufferedReader(new InputStreamReader(my_url21.openStream()));
          while(null != (strTemp = br21.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Jindal Steel And Power :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                    break;}
          
        }   
           String sql22="INSERT INTO change1 VALUES('Jindal Steel and Power',"+value+",'" +date1+"');";
            statement.executeUpdate(sql22);
            
             // Bharti Airtel
            URL my_url22 = new URL("http://www.moneycontrol.com/india/stockpricequote/telecommunicationsservice/bhartiairtel/BA08");
            BufferedReader br22 = new BufferedReader(new InputStreamReader(my_url22.openStream()));
          while(null != (strTemp = br22.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Bharti Airtel :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
                    break;
            }
          
        }   
           String sql23="INSERT INTO change1 VALUES('Bharti Airtel',"+value+",'" +date1+"');";
            statement.executeUpdate(sql23);
            
             // DLF
            URL my_url23 = new URL("http://www.moneycontrol.com/india/stockpricequote/constructioncontractingrealestate/dlf/D04");
            BufferedReader br23 = new BufferedReader(new InputStreamReader(my_url23.openStream()));
          while(null != (strTemp = br23.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("DLF :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;
            }
          
        }   
           String sql24="INSERT INTO change1 VALUES('DLF',"+value+",'" +date1+"');";
            statement.executeUpdate(sql24);
            
             // Ambuja Cement
            URL my_url24 = new URL("http://www.moneycontrol.com/india/stockpricequote/cementmajor/ambujacements/AC18");
            BufferedReader br24 = new BufferedReader(new InputStreamReader(my_url24.openStream()));
          while(null != (strTemp = br24.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("Ambuja Cement :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql25="INSERT INTO change1 VALUES('Ambuja Cement',"+value+",'" +date1+"');";
            statement.executeUpdate(sql25);
            
            // Cipla
            URL my_url25 = new URL("http://www.moneycontrol.com/india/stockpricequote/pharmaceuticals/cipla/C");
            BufferedReader br25 = new BufferedReader(new InputStreamReader(my_url25.openStream()));
          while(null != (strTemp = br25.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Cipla :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql26="INSERT INTO change1 VALUES('Cipla',"+value+",'" +date1+"');";
            statement.executeUpdate(sql26);
            
            // TCS
            URL my_url26 = new URL("http://www.moneycontrol.com/india/stockpricequote/computerssoftware/tataconsultancyservices/TCS");
            BufferedReader br26 = new BufferedReader(new InputStreamReader(my_url26.openStream()));
          while(null != (strTemp = br26.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println("TCS :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                      value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql27="INSERT INTO change1 VALUES('TCS',"+value+",'" +date1+"');";
            statement.executeUpdate(sql27);
            
            // HDFC Bank
            URL my_url27 = new URL("http://www.moneycontrol.com/india/stockpricequote/banksprivatesector/hdfcbank/HDF01");
            BufferedReader br27 = new BufferedReader(new InputStreamReader(my_url27.openStream()));
          while(null != (strTemp = br27.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" HDFC Bank :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql28="INSERT INTO change1 VALUES('HDFC Bank',"+value+",'" +date1+"');";
            statement.executeUpdate(sql28);
            
            // Pidilite Industries
            URL my_url28 = new URL("http://www.moneycontrol.com/india/stockpricequote/chemicals/pidiliteindustries/PI11");
            BufferedReader br28 = new BufferedReader(new InputStreamReader(my_url28.openStream()));
          while(null != (strTemp = br28.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Pidilite Industries :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql29="INSERT INTO change1 VALUES('Pidilite',"+value+",'" +date1+"');";
            statement.executeUpdate(sql29);
            
            // HIndustan Unilever
            URL my_url29 = new URL("http://www.moneycontrol.com/india/stockpricequote/personalcare/hindustanunilever/HU");
            BufferedReader br29 = new BufferedReader(new InputStreamReader(my_url29.openStream()));
          while(null != (strTemp = br29.readLine())){
               Matcher m = r.matcher(strTemp);
               
           if( m.find() )
            {
                     
                    out.println(" Hindustan Unilever :- "+m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12));
                    i = m.group(8)+m.group(9)+m.group(10)+m.group(11)+m.group(12);
                    
                    
                   value = Double.parseDouble(i);
                     if(m.group(8) == "-")
                   {
                       
                       value= value * (-1);
                                         }
            break;        }
          
        }   
           String sql30="INSERT INTO change1 VALUES('Hindustan Unilever',"+value+",'" +date1+"');";
            statement.executeUpdate(sql30);
            
           
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
