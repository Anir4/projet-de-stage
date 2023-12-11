<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
la somme de 2 + 2 est <%= 2+2%><br>
Protocol : <%= request.getProtocol() %><br> 
Protocol : <%out.println(request.getProtocol()); %><br>
Scheme : <%= request.getScheme() %><br> 
Scheme : <%out.println(request.getScheme()); %><br>
ServerName:<%= request.getServerName() %><br> 
ServerName<%out.println(request.getServerName()); %><br>
ServerPort:<%= request.getServerPort() %><br> 
ServerPort<%out.println(request.getServerPort());%><br>
RemoteAddr <%= request.getRemoteAddr() %><br> 
RemoteAddr <%out.println(request.getRemoteAddr());%><br>
RemoteHost: <%= request.getRemoteHost() %><br>
Method : <%= request.getMethod() %><br>
RemoteHost<% out.println(request.getRemoteHost());%>
</body>
</html>