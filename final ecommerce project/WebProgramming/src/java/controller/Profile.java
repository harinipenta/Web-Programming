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
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author swetha
 */
public class Profile extends HttpServlet {

    

   
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
            try {
                java.sql.Statement statement =null;
                
                String name= (String)request.getSession().getAttribute("fullname");
                String mobile=(String)request.getSession().getAttribute("mobile");
                String address=(String)request.getSession().getAttribute("address");
                
                String get_orders = "Select order_summary,order_date,shipping_address from orders where user_id=(select"
                        + " user_id from useraccounts where mobile= ' "+mobile+"')";
                try {
                    Class.forName("com.mysql.jdbc.Driver");
                } catch (ClassNotFoundException ex) {
                    Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
                }
                Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
                //} response.getWriter().println("Connection Succesful");
                statement= conn.createStatement();
                ResultSet rs = statement.executeQuery(get_orders);
                
                
                ArrayList Rows = new ArrayList();
                
                try {
                    while (rs.next()){
                        ArrayList row = new ArrayList();
                        
                            row.add(rs.getString("order_summary"));
                            row.add(rs.getString("order_date"));
                            row.add(rs.getString("shipping_address"));
                        
                        Rows.add(row);
                    }   
                
                request.getSession().setAttribute("propertyList", Rows);
                
                RequestDispatcher requestDispatcher = getServletContext().getRequestDispatcher("profile.jsp");
                requestDispatcher.forward(request,response);
                
                } catch (SQLException ex) {
                        Logger.getLogger(Profile.class.getName()).log(Level.SEVERE, null, ex);
                    }
            } catch (SQLException ex) {
                Logger.getLogger(Profile.class.getName()).log(Level.SEVERE, null, ex);
            }
    }

    
    }


