<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<% if((Boolean)request.getAttribute("Connexion").equals(true)){ %>
<h4>Bonjour 
<%= request.getAttribute("login")%>
</h4>
<% } else{ %>
<h4>Connexion refuse</h4>
<%}%>
</body>
</html>