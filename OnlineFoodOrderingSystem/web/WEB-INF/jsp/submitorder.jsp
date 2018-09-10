<%@ taglib uri="http://www.springframework.org/tags/form" prefix="form"%>  
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>  
<head>
<body class="submitorderbody"> 

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel= "stylesheet" type= "text/css" href= "style.css"/>
</head><center>
    <h1 class="submitorder">Enter the order number and pay the Bill</h1>

    <form:form method="post" action="confirm">  
        <table >  
            <tr>  
            <br>
            <br>
            <td><h3 class="submitorder">Order Number: </td> 
            <td><form:input path="Orderno"/></td></h3>
            </tr> 
            <tr>
            <br>
            <br>
            <td><button class="button" type="submit" value="Confirm">Confirm</button>  
                </tr>  
        </table>  
    </form:form>  
