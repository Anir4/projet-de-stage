<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<% String[] tableau = {"ali","med","salah","ahmed"};%>
	<% for(int i=0;i<tableau.length;i++){ %>
	<%= tableau[i]%><br/><%}%>
</body>
</html>