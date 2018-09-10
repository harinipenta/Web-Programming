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
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

public class Register extends HttpServlet {

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            response.setContentType("text/html;charset=UTF-8");
            PrintWriter out = response.getWriter();
            out.println("<h3>Register Servlet</h3>");
            HttpSession session = request.getSession(true);
            session.setAttribute("username", request.getParameter("user"));
            session.setAttribute("email", request.getParameter("email"));
            String fullname = request.getParameter("fullname");
            String mobile = request.getParameter("mobile");
            String email = request.getParameter("email");
            String password = request.getParameter("password");
            //establish connection
            Class.forName("com.mysql.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");

//            Class.forName("com.mysql.jdbc.Driver");
//            java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/vishal", "root", "root");
            java.sql.PreparedStatement pst = conn.prepareStatement("insert into useraccounts(password,fullname,mobile,email) values(?,?,?,?)");
            pst.setString(1, password);
            pst.setString(2, fullname);
            pst.setString(3, mobile);
            pst.setString(4, email);

            pst.executeUpdate();
            pst.close();
            session.setAttribute("fullname", fullname);
            
            response.sendRedirect("userlogin.jsp");

//            int a = pst.executeUpdate();
        } catch (Exception ex) {
            Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
}
