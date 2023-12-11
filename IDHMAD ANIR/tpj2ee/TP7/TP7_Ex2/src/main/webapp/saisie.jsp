<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
    <form action="EnvoyerCalculer">
        Operande 1 : 
        <input type="number" name="Op1"><br>
        Operande 2 : 
        <input type="number" name="Op2"><br>
        <select name="Choix" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
    <% 
        Object error1 = request.getAttribute("Error1");
        Object error2 = request.getAttribute("Error2");
        if (error1 != null && (Boolean)error1) {%>
            <h4>Saisie invalide : Empty field</h4>
    <% } 
       if (error2 != null && (Boolean)error2) { %>
            <h4>Division par 0 impossible</h4>
    <%} %>
</body>
</html>
