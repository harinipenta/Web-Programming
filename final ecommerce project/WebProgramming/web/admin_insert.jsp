<%-- 
    Document   : admin_insert
    Created on : Apr 25, 2017, 6:48:03 PM
    Author     : Gatty
--%>

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
                        
             <% 
            
            String db_insertion_result = (String) session.getAttribute("db_insertion_result");
                        
            %>    
            <%if(db_insertion_result!=null){
                if(db_insertion_result.equals("success")){%>
                     <span style="color:green">  <b> Insertion Successful!!  </b> </span> 
                     <% } if(db_insertion_result.equals("failure")) { %>
                     <span style="color:red">  <b> Insertion Failure! Please try again!   </b> </span> 
                     <% }}%>
            
                
              <form name="admin" action="AdminController" method="post">
                  <%session.setAttribute("admin_mode", "insert");%>
                <h3> Select a product category to insert </h3> <br />
                Category &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <select name="admin_category_choice">
                        
                        <option selected="selected" value="mobile"> Mobiles </option> 
                        <option value="books"> Books </option>
                        <option value="music"> Sarees </option> 
                    
                    </select>
                
                <br/><br/> Product Name &nbsp;   <input type="text" name="admin_product_name" /> <br />  <br />
                    Description &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="admin_product_description" /> <br />  <br />
                    Price &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="admin_product_price" /> <br />  <br />
                   Quantity &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  <input type="text" name="admin_product_qt" /> <br />  <br />

                    <input type="submit" class="btn btn-info" value="Insert" name="admin_db_changes" />
              </form>
            </div>
        </div>
        </div><!--container-->     
        
        
        <%@include file="footer.jsp" %>
    </body>
</html>
