<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form"%>  
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>  
<html>
    <head>
        <title>Online Food Ordering System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel= "stylesheet" type= "text/css" href= "style.css"/>
    </head>
    <body class="orderformbody">
        <br><br><br>
    <center> <h1 class="orderformh1">Enter the below details to order</h1>
        <form:form method="post" action="save">  
            <table >  

                <td><h3 class="orderformh3">Select the Item :</h3></td>  
                <td>
                    <form:select path="type">

                        <form:options items="${typeList}" />
                    </form:select>
                </td>
                <tr>  
                    <td><h3 class="orderformh3">Enter the Quantity:</h3></td> 
                    <td><form:input path="Orderno"  /></td>
                </tr> 
                <br>
                <tr>  
                </tr> 
                <tr>  
                    <td> </td>  
                    <td><button class="button" type="submit" value="Order">Confirm</button>
                </tr>  
            </table>  </center></body>
        </form:form>  
