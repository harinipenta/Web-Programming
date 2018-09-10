
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
<p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>ORDER CONFIRMATION</strong></font></p>
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
            <c:out value="${cartItem.quantity}" /> 
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
<h4>THANK YOU FOR SHOPPING WITH SHOPPER STOP!</h4>
 
<c:if test="${cart.lineItemCount!=0}">
    
    
 <!--pass all order details as hidden--> 
   <c:forEach var="cartItem" items="${cart.cartItems}" varStatus="counter">

<input type="hidden" name="item" value='${cartItem.partNumber}'>
<input type="hidden" name="quantity" value='${cartItem.quantity}'>
   </c:forEach>
</c:if>
</form>
</div>
  <br/><br/>
  <%@include file="footer.jsp" %>
  
</body>
</html>
 