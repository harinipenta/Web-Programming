/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author gatty
 */
public class AdminController extends HttpServlet {

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException{
        
                HttpSession session = request.getSession(true);

           String admin_mode = (String) session.getAttribute("admin_mode");
                    RequestDispatcher rd;

    if (admin_mode.equals("insert")) {
                    try {
                        String db_insertion_result;
                        String product_name=request.getParameter("admin_product_name");
                        String product_desc=request.getParameter("admin_product_description");
                        String product_price=request.getParameter("admin_product_price");
                        String product_quantity=request.getParameter("admin_product_qt");
                        String product_category = request.getParameter("admin_category_choice");
                        String insert_query = "INSERT INTO PRODUCTS (product_name, product_desc, product_price, "
                                + "product_avail, product_category) values ( '"+product_name +"', '"
                                + product_desc+ "', '"+product_price +"', ' "+product_quantity+" ', '"+product_category+"' )";
                        try {
                            Class.forName("com.mysql.jdbc.Driver");
                        } catch (ClassNotFoundException ex) {
                            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
                        }
                        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
                       // response.getWriter().println("Connection Succesful");
                        java.sql.Statement statement = conn.createStatement();
                        
                        int rows_inserted = statement.executeUpdate(insert_query);
                        if(rows_inserted>0){
                            db_insertion_result ="successs";
                           session.setAttribute("db_insertion_result", db_insertion_result);

                            rd = request.getRequestDispatcher("admin_insert.jsp");
                            rd.forward(request, response);
                        }
                        else{
                            db_insertion_result ="failure";
                           session.setAttribute("db_insertion_result", db_insertion_result);


                        }
                        
                    } catch (SQLException ex) {
                        Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                
            }
    
    
    
     if (admin_mode.equals("delete")) {
                    try {
                        String db_result;
                        String[] product_id=request.getParameterValues("selected");
                        int i;
                        String append="";
                        int[] id = null;
                        for(i=0;i<product_id.length;i++){
                           // id[i]=Integer.parseInt(product_id[i]);
                           if(append.equals("")){
                            append = append.concat(""+product_id[i]);
                           }
                           else{
                            append = append.concat(","+product_id[i]);
  
                           }
                        }
                        
                        String delete_query = "DELETE FROM PRODUCTS where PRODUCT_ID in ("+append+")";
                        try {
                            Class.forName("com.mysql.jdbc.Driver");
                        } catch (ClassNotFoundException ex) {
                            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
                        }
                        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
                       // response.getWriter().println("Connection Succesful");
                        java.sql.Statement statement = conn.createStatement();
                        
                        int rows_affected = statement.executeUpdate(delete_query);
                        if(rows_affected>0){
                            db_result ="successs";
                           session.setAttribute("db_insertion_result", db_result);

                            rd = request.getRequestDispatcher("admin_delete.jsp");
                            rd.forward(request, response);
                        }
                        else{
                            db_result ="failure";
                           session.setAttribute("db_insertion_result", db_result);
                            rd = request.getRequestDispatcher("error.jsp");


                        }
                        
                    } catch (SQLException ex) {
                        Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                
            }
    }

}
