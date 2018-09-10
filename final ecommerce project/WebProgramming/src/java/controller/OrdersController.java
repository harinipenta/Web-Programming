/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Date;
import java.util.Properties;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.mail.*;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.servlet.ServletContext;
import other.CartBean;
import other.CartItemBean;
/**
 *
 * @author gatty
 */
public class OrdersController extends HttpServlet {

   private String host;
    private String port;
    private String user;
    private String pass;
 
    public void init() {
        // reads SMTP server setting from web.xml file
        ServletContext context = getServletContext();
        host = context.getInitParameter("host");
        port = context.getInitParameter("port");
        user = context.getInitParameter("user");
        pass = context.getInitParameter("pass");
    }
public void doPost(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException {
 
  String strAction = request.getParameter("order");
  CartBean cart= new CartBean();
  cart = (CartBean) request.getSession().getAttribute("cart");
 double total= cart.getOrderTotal();
 // reads form fields
        String recipient = (String)request.getSession().getAttribute("email");
        String subject = "Your order confirmation - SHOPPER STOP";
        String content = "Your order has been received. Thanks for shopping with us..";
 
        String resultMessage = "";
 
        try {
            EmailUtility.sendEmail(host, port, user, pass, recipient, subject,
                    content);
            resultMessage = "The e-mail was sent successfully";
        } catch (Exception ex) {
            ex.printStackTrace();
            resultMessage = "There were an error: " + ex.getMessage();
        } finally {
            request.setAttribute("Message", resultMessage);
            
              response.sendRedirect("OrderConfirmation.jsp");

        }

 
   
 }
  
    
    
   

}
