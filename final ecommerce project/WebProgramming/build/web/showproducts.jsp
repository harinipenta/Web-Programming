<%-- 
    Document   : test
   Created on : Apr 25, 2017, 6:48:03 PM
    Author     : Gatty
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import="java.io.*,java.util.*,java.sql.*"%>
<%@ page import="javax.servlet.http.*,javax.servlet.*" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Products Page</title>
    </head>
    <body>
        <%@ include file="header.jsp" %>
        <%
            int count = 0;
        %>

        <!--${fn:length(list)}-->
        <%--<%= session.getAttribute("results") %>--%>
        <div class="container">
            <c:forEach items="${list}" var="record">
                <%--<c:when test="${count gt 3}">--%>
                    <% // count = 0;%>
                <!--</div>-->
                <!--<div class="conatiner">-->
                <%--</c:when>--%>
                <div  class="col-md-4">
                    <div  class="panel panel-default">
                        <div class="panel-heading">
                            <img class= "panel-img" src="${record.product_image}">
                        </div>
                        <div id = "product" class="panel-body" >
                            <!--form name="form" method="post" action="AddToCart"-->
                           <form name="form" method="post" action="CartController">
                                <div class="form-group">
                                    <div id="productName">
                                        ${record.product_name}
                                    </div>
                                    <div id="productDesc">
                                        ${record.product_desc}
                                    </div>
                                    <div id="productPrice">
                                        ${record.product_price}
                                    </div>
                                    <!--hide this product id later-->
                                     <input type="hidden" name="product_id" value="${record.product_id}" >
                                     <input type="hidden" name="description" value="${record.product_desc}" >

                                     <input type="hidden" name="product_price" value="${record.product_price}" >

                                     <input type ="hidden" name="model" value="${record.product_name}">
                                    <label for="sel1">Quantity(Max:${record.product_avail}):</label>
                                    <input type="number" name="product_qt">
                                </div>
                               <input type="hidden" name="action" class="btn btn-success" value="add"> 

                                <input type="submit" name="addToCart" class="btn btn-success" value="Add to Cart">  
                           </form>
                            <p></p>
                        </div>
                    </div>
                </div>
<!--                <tr>
                    <td>${record.product_id}</td>
                    <td>${record.product_name}</td>
                    <td>${record.product_desc}</td>
                    <td>${record.product_price}</td>
                    <td>${record.product_avail}</td>
                </tr>-->
            </c:forEach>
        </div>
        <!--</table>-->
<!--
        <div class="container">

            <div  class="col-md-4">
                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="i7.jpg">
                    </div>
                    <div id = "product1" class="panel-body">
                        <form name="1" method="post" action="">
                            <div class="form-group">
                                Price:
                                <div id="price1">

                                </div>
                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p1">
                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="i7.jpg">
                    </div>
                    <div id = "product2" class="panel-body">
                        <form name="2" method="post" action="">
                            <div class="form-group">
                                Price:
                                <div id="price2">

                                </div>
                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p2">

                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="i7.jpg">
                    </div>
                    <div id = "product3" class="panel-body">
                        <form name="3" method="post" action="">
                            <div class="form-group">
                                Price:
                                <div id="price3">

                                </div>
                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p3">

                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        /.row 
        <div class="container">
            <div  class="col-md-4">
                <div  class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="i7.jpg">
                    </div>
                    <div id = "product4" class="panel-body">
                        <form name="4" method="post" action="">
                            <div class="form-group">
                                Price:
                                <div id="price4">

                                </div>
                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p4">

                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="images/panel2.jpg">
                    </div>
                    <div id = "product5" class="panel-body">
                        <form name="5" method="post" action="">
                            <div class="form-group">

                                Price:
                                <div id="price5">

                                </div>

                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p5">

                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class= "panel-img" src="images/panel3.jpg">
                    </div>
                    <div id = "product6" class="panel-body">
                        <form name="6" method="post" action="">
                            <div class="form-group">
                                Price:
                                <div id="price6">

                                </div>
                                <label for="sel1">Quantity:</label>
                                <input type="text" name="p6">

                            </div>
                            <input type="button" class="btn btn-success" onclick="call()" value="Add to Cart"> </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>-->

        <%@ include file="footer.jsp" %>
        <script language="javascript" type="text/javascript">
            function call() {

            }
        </script>
</body>
</html>
