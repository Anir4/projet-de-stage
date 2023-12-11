package ma.estn.web;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ServletTraitemen
 */
@WebServlet("/ServletTraitement")
public class ServletTraitement extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ServletTraitement() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
		String[] loisirs = request.getParameterValues("loisir");
	    response.setContentType("text/html");
	    PrintWriter p = response.getWriter();
	    p.println("<html>");
	    p.println("<head>");
	    p.println("</head>");
	    p.println("<body>");
	    if (request.getParameter("sexe").equals("H")) {
	        p.println("Bonjour monsieur: " + request.getParameter("prenom") + " " + request.getParameter("nom") + " vous etes un : " + request.getParameter("fonction"));
	    } else {
	        p.println("Bonjour madame: " + request.getParameter("prenom") + " " + request.getParameter("nom") + " vous etes un : " + request.getParameter("fonction"));
	    }
	    p.println("<br>");
	    if (request.getParameterValues("loisir") == null) {
	        p.println("Vous n'avez aucun loisir : <br>");
	    } else {
	        p.println("Vous avez comme loisir : <br>");
	        for (int i = 0; i < loisirs.length; i++) {
	            p.println(loisirs[i] + "<br>");
	        }
	    }
	    p.println("</body>");
	    p.println("</html>");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	    String[] loisirs = request.getParameterValues("loisir");
	    response.setContentType("text/html");
	    PrintWriter p = response.getWriter();
	    p.println("<html>");
	    p.println("<head>");
	    p.println("</head>");
	    p.println("<body>");
	    if (request.getParameter("sexe").equals("H")) {
	        p.println("Bonjour monsieur: " + request.getParameter("prenom") + " " + request.getParameter("nom") + " vous etes un : " + request.getParameter("fonction"));
	    } else {
	        p.println("Bonjour madame: " + request.getParameter("prenom") + " " + request.getParameter("nom") + " vous etes un : " + request.getParameter("fonction"));
	    }
	    p.println("<br>");
	    if (request.getParameterValues("loisir") == null) {
	        p.println("Vous n'avez aucun loisir : <br>");
	    } else {
	        p.println("Vous avez comme loisir : <br>");
	        for (int i = 0; i < loisirs.length; i++) {
	            p.println(loisirs[i] + "<br>");
	        }
	    }
	    p.println("</body>");
	    p.println("</html>");
	}
}
