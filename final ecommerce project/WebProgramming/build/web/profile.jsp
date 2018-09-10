<%@page import="java.util.ArrayList"%>



    <<%
if (request.getAttribute("propertyList") != null) {
	ArrayList itemsArray = (ArrayList) request.getAttribute("propertyList");
	out.println(itemsArray);
	out.println(itemsArray.size());

 	for (int i=0; i < itemsArray.size(); i++) {
 		out.println(itemsArray.get(i));
 	}
}
else {
	out.println("no data in array");
}	
%>

