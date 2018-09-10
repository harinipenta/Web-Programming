/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author swetha
 */
@WebServlet(name = "AddToCart", urlPatterns = {"/AddToCart"})
public class AddToCart extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        // the idea is that all the items added to cart will be stored as 
        //cartitems+"index like 1,2,3" and the values in that 
        //cookie will be product_id(comma)quantity
        // in the checkout code you just read through all the cookies and using JS populate some list.
        
        String product_id=request.getParameter("product_id");
        String product_qt = request.getParameter("product_qt");
        Cookie cookie;
        int counter;
        Cookie[] cookies = request.getCookies();
        if (cookies != null) {
            counter = cookies.length+1;
            cookie = new Cookie("cartitems"+counter, product_id+","+product_qt);
                response.addCookie(cookie);
            }
         else {
            cookie = new Cookie("cartitems1", product_id+","+product_qt);
            response.addCookie(cookie);
        }
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
