package ma.estn.web;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class InsertionEtudiant
 */
@WebServlet("/InsererEtudiant")
public class InsererEtudiant extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private GestionEtudiants G;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public InsererEtudiant() {
        super();
        this.G=new GestionEtudiants();
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Etudiant e=new Etudiant(request.getParameter("nom"),request.getParameter("cin"),Double.parseDouble(request.getParameter("moyenne")));
		response.setContentType("text/html");
		G.listEtudiants.add(e);
		PrintWriter p=response.getWriter();
		p.println("<html>");
	    p.println("<head>");
	    p.println("</head>");
	    p.println("<body>");
	    p.println("<table border=\"2\">");
	    for(int i=0;i<G.listEtudiants.size();i++)
	    {
	    	p.println("<tr>");
	    	p.println("<td>");
	    	p.println(request.getParameter("nom"));
	    	p.println("</td>");
	    	p.println("<td>");
	    	p.println(request.getParameter("cin"));
	    	p.println("</td>");
	    	p.println("<td>");
	    	p.println(request.getParameter("moyenne"));
	    	p.println("</td>");
	    	p.println("</tr>");
	    }
	    p.println("</table>");
	    p.println("</body>");
	    p.println("</html>");
	    getServletContext().getRequestDispatcher("afficheEtudiant.html").forward(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
