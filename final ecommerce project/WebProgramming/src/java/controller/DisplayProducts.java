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
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import other.ProductClass;

/**
 *
 * @author swetha
 */
@WebServlet(name = "DisplayProducts", urlPatterns = {"/DisplayProducts"})
public class DisplayProducts extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException, ClassNotFoundException, SQLException {
        response.setContentType("text/html;charset=UTF-8");

        HttpSession session = request.getSession(true);

        String category = request.getParameter("category");
        String productsQuery = "SELECT * FROM products WHERE product_category = '" + category + "' AND product_avail > 0";

        ArrayList<ProductClass> productList = new ArrayList<ProductClass>();
        Class.forName("com.mysql.jdbc.Driver");
        Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
        //response.getWriter().println("Connection Succesful");
        java.sql.Statement statement = conn.createStatement();

        ResultSet rs = statement.executeQuery(productsQuery);
        ProductClass productDetail;
        while (rs.next()) {
            productDetail = new ProductClass();
            productDetail.setProduct_id(rs.getString("product_id"));
            productDetail.setProduct_name(rs.getString("product_name"));
            productDetail.setProduct_desc(rs.getString("product_desc"));
            productDetail.setProduct_price(rs.getInt("product_price"));
            productDetail.setProduct_avail(rs.getInt("product_avail"));
            productDetail.setProduct_image(rs.getString("product_image"));


            productList.add(productDetail);
        }
        request.setAttribute("list", productList);
        request.setAttribute("results", productList.size());
        RequestDispatcher rd= request.getRequestDispatcher("showproducts.jsp");
        rd.forward(request, response);
        
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(DisplayProducts.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(DisplayProducts.class.getName()).log(Level.SEVERE, null, ex);
        }
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
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(DisplayProducts.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(DisplayProducts.class.getName()).log(Level.SEVERE, null, ex);
        }
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
