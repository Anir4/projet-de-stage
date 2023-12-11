<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1"%>
<%@ page import="java.util.ArrayList" %>
<%@ page import="mesclasses.GestionEtudiants" %>
<%@ page import="mesclasses.Etudiant" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%GestionEtudiants G=new GestionEtudiants();%>
	<%ArrayList<Etudiant> liste=G.getListEtudiant();%>
	<%Etudiant e1=new Etudiant("Taha","AE176767",19.67);%>
	<%Etudiant e2=new Etudiant("Widad","AE176767",18.67);%>
	<%Etudiant e3=new Etudiant("Taha","AE176767",19.67);%>
	<%Etudiant e4=new Etudiant("Widad","AE176767",18.67);%>
	<%liste.add(e1);%>
	<%liste.add(e2);%>
	<%liste.add(e3);%>
	<%liste.add(e4);%>
	<table border="2">
	<%for(int i=0;i<liste.size();i++){%>
	<tr>
	<td><%= liste.get(i).getNom() %></td>
	<td><%= liste.get(i).getCin() %></td>
	<td><%= liste.get(i).getMoyenne() %></td>
	</tr>
	<%}%>
	</table>
</body>
</html>