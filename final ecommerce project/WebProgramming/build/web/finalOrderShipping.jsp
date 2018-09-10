
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Lazy ecomm - Shopping Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 
<body>
    <%@include file="header.jsp" %>   
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<div class="container">
<p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>Your order contains:</strong></font></p>
<table class="table-bordered table-responsive my-table">
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Model
      Description</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Quantity</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Unit
      Price</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Total</font></strong></td>
  </tr>
  <jsp:useBean id="cart" scope="session" class="other.CartBean" />
  <c:if test="${cart.lineItemCount==0}">
  <tr>
  <td colspan="4"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">- Cart is currently empty -<br/>
  </tr>
  </c:if>
  <c:forEach var="cartItem" items="${cart.cartItems}" varStatus="counter">
  
  <tr>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><c:out value="${cartItem.partNumber}"/></b><br/>
      <c:out value="${cartItem.modelDescription}"/></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
            <input type='hidden' name='itemIndex' value='<c:out value="${counter.count}"/>'>
            <input type='text' name="quantity" readonly value='<c:out value="${cartItem.quantity}" />' size='2'> 
            </td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">$<c:out value="${cartItem.unitCost}"/></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">$<c:out value="${cartItem.totalCost}"/></font></td>
  </tr>
  
  </c:forEach>
  <tr>
    <td colspan="2"> </td>
    <td> </td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Subtotal: $<c:out value="${cart.orderTotal}"/></font></td>
  </tr>
</table>
 
<c:if test="${cart.lineItemCount!=0}">
    
    <!--shipping form-->
   <br/><br/>
   <div class="panel panel-body">
<p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>Please fill Shipping details:</strong></font></p>
   
       
	<div class="row">
		 
            <form class="form-horizontal">
                <!-- Address form -->
         
                
                <!-- full-name input-->
                <div class="control-group">
                    <label class="control-label">Full Name</label>
                    <div class="controls">
                        
                        <input id="full-name" name="full-name" type="text" placeholder="full name"
                        class=" input-lg"  value='<%= session.getAttribute("fullname")%>'>
                                
                        <p class="help-block"></p>
                    </div>
                </div>
                <!-- address-line1 input-->
                <div class="control-group">
                    <label class="control-label">Address</label>
                    <div class="controls">
                        <input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
                               class=" form-control input-lg" value='<%= session.getAttribute("address")%>'>
                        <p class="help-block">Street address, Apartment /house no., city, country,Zip code</p>
                    </div>
                </div>
                
      
	</div>
</div>
 <!--pass all order details as hidden--> 
   <c:forEach var="cartItem" items="${cart.cartItems}" varStatus="counter">

<input type="hidden" name="item" value='${cartItem.partNumber}'>
<input type="hidden" name="quantity" value='${cartItem.quantity}'>
   </c:forEach>
<br/><br/><a href="payment.jsp" class="btn btn-primary">Proceed to Payment</a>
</c:if>
</form>
</div>
  <br/><br/>
  <%@include file="footer.jsp" %>
  
</body>
</html>
 