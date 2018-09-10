<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form"%>  
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>  
<head>
<body class="vieworderbody">
    <div><title>Thank you,Visit Again</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel= "stylesheet" type= "text/css" href= "style.css"/>
    </head>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1 class="vieworderh1"><b>ORDER STATUS</b><h1>

        <bold><h1  class="vieworderh1">Thanks for Ordering Online,Your Order Number is 
                <c:forEach var="Order" items="${list}"> 
                    ${Order.park_lot_no}.</font> <br>
                    You are one step closer to complete your order<br>
                    Click on Check Out and Enter the Order details to pay the Bill.
                <h1></bold>
            </c:forEach>
        <form action="submitorder">
            <button class="button" type="submit" value="Check Out">Checkout</button>
        </form>
    <br/></div>
<div class="topcorner"><form action="index.jsp">

        <button class="button" type="submit" value="Home">Home</button></body>
    </form> <div>