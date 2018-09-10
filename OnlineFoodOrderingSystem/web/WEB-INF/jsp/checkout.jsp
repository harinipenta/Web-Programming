<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form"%>  
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>  
<body class="checkoutbody"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel= "stylesheet" type= "text/css" href= "style.css"/>
<br>
<br>
<br>
<div>
    <title>Order Status</title> </head>
<center><h2 class="checkouth2" >Order Status</h2>

    <bold><h2 class="checkouth2" >You have successfully checked out</font</h2></bold>
    <h3> Quantity Ordered:<c:forEach var="Order" items="${list}"> 
            ${Order.orderno}   </h1></bold>
            </br>
            <h3><bold>Total Amount to be paid :$ ${Order.park_lot_no}
                    </br>            </br>
                    Thanks for the online order!! </bold> </h3>
    </c:forEach></center></div>
<div class="topcorner"><form action="index.jsp">
        <button class="button" type="submit" value="Home">Home</button></div>
</form>
<br/>
</body>