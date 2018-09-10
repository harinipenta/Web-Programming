
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
<p><font face="Verdana, Arial, Helvetica, sans-serif"><strong>Shopping Cart</strong></font></p>
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
  <form name="item" method="POST" action="CartController">
  <tr>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><c:out value="${cartItem.partNumber}"/></b><br/>
      <c:out value="${cartItem.modelDescription}"/></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
            <input type='hidden' name='itemIndex' value='<c:out value="${counter.count}"/>'>
            <input type='text' name="quantity" value='<c:out value="${cartItem.quantity}"/>' size='2'> 
            &nbsp;&nbsp;  <input type="submit" name="action" value="Update">
   &nbsp;&nbsp;  <input type="submit" name="action" value="Delete"></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">$<c:out value="${cartItem.unitCost}"/></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">$<c:out value="${cartItem.totalCost}"/></font></td>
  </tr>
  </form>
  </c:forEach>
  <tr>
    <td colspan="2"> </td>
    <td> </td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Subtotal: $<c:out value="${cart.orderTotal}"/></font></td>
  </tr>
</table>

<br/><br/><a href="finalOrderShipping.jsp" class="btn btn-primary">Confirmation & Payment</a>
</div>
  <br/><br/>
  <%@include file="footer.jsp" %>
</body>
</html>
 