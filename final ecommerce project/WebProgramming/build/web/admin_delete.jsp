<%-- 
    Document   : admin_insert
    Created on : Apr 25, 2017, 6:48:03 PM
    Author     : Gatty
--%>

<%@page import="java.util.logging.Logger"%>
<%@page import="java.util.logging.Level"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin</title>
    </head>
    <body>
        <%@include file="header.jsp" %>
        <div class="container">
        <div class ="panel panel-info">
            <div class="panel-body">
                <h4>Products list:</h4>
             <%@ page import="java.sql.*, java.util.*"%>           
             <% 
            
            String db_insertion_result = (String) session.getAttribute("db_insertion_result");
                        
            %>    
            <%if(db_insertion_result!=null){
                if(db_insertion_result.equals("success")){%>
                     <span style="color:green">  <b> Deletion Successful!!  </b> </span> 
                     <% } if(db_insertion_result.equals("failure")) { %>
                     <span style="color:red">  <b> Deletion Failure! Please try again!   </b> </span> 
                     <% }}%>
            
                
              <form name="admin" action="AdminController" method="post">
                  <%session.setAttribute("admin_mode", "delete");%>
                <table class="table-bordered table-responsive my-table">
                    <tr>
                        <th>Product Id</th>
                       <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Availability</th>
                        <th>Product Category</th>
                        <th>Click to select</th>



                        
                    </tr>
                  <%
                      try {
                            Class.forName("com.mysql.jdbc.Driver");
                        } catch (ClassNotFoundException ex) {
                            System.out.println(ex);
                        }
                        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
                        response.getWriter().println("Connection Succesful");
                        java.sql.Statement statement = conn.createStatement();
                        
                      String select = "select product_id,product_name,product_desc,product_avail,product_category"
                              + " from products";
                      ResultSet rs= statement.executeQuery(select);
                      while(rs.next()){
                  %>
                
                  <tr>
                      <td>
                          <%String id= rs.getString("product_id"); %><%=id%>
                      </td>
                      <td>
                          <%String name = rs.getString("product_name"); %><%=name%>

                      </td>
                      <td>
                          <%String desc = rs.getString("product_desc");%><%=desc%>
                      </td>
                      <td>
                         <%String avail = rs.getString("product_avail");%><%=avail%>

                      </td>
                      <td>
                         <%String cat = rs.getString("product_category");%><%=cat%>

                          
                      </td>
                      <td>
                          <input type="checkbox" name= "selected" value='<%=id%>'>


                      </td>
                  </tr>
                  
                  
               <% }%>
               
               </table>
               <br/>
               <input type="submit" class="btn btn-info" value="Delete selected rows" name="admin_db_changes" />
              </form>
            </div>
        </div>
        </div><!--container-->     
        
        
        <%@include file="footer.jsp" %>
    </body>
</html>
