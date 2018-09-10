package controller;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.sql.Connection;
import java.sql.Statement;
import javax.servlet.annotation.WebServlet;

@WebServlet(name = "Login", urlPatterns = {"/Login"})
public class Login extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();

        HttpSession session = request.getSession(true);
        // getting values from login.jsp

        String mobile = request.getParameter("mobile");
        String password = request.getParameter("mobilePassword");
        //LoginBean bean=new LoginBean(); 
        // setting values to bean
        //bean.setUserName(username);
        //bean.setPassword(password);
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/shoppingcart", "root", "");
            response.getWriter().println("Connection Succesful");
            java.sql.Statement statement = null;
            String page = "loginfail.jsp";
            statement = ((java.sql.Connection) conn).createStatement();
            String QUERY = "SELECT user_id, fullname,address,user_role,email,mobile FROM UserAccounts WHERE mobile = '" 
                    + mobile +"'"+" AND password = '" + password +"'";
            
            ResultSet rs = statement.executeQuery(QUERY);
            
                while (rs.next()) {
                    String fullname = rs.getString("fullname");
                    String userid = rs.getString("user_id");
                    String address = rs.getString("address");
                    String email = rs.getString("email");
                    String role = rs.getString("user_role");
                    String mobile_no=rs.getString("mobile");
                    out.println(fullname + " " + userid+""+address);
                    session.setAttribute("fullname", fullname);
                    session.setAttribute("userid", userid);
                    session.setAttribute("address",address);
                    session.setAttribute("email",email);
                    session.setAttribute("user_role", role);
                    session.setAttribute("mobile",mobile_no);
                    page = "userlogin.jsp";
                }
                
                response.sendRedirect(page);
            
        } catch (ClassNotFoundException | SQLException e) {
            e.printStackTrace();
        }

    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
