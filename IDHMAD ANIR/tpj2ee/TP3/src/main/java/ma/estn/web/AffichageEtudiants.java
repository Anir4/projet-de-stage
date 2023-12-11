package ma.estn.web;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.util.ArrayList;
/**
 * Servlet implementation class AffichageEtudiants
 */
@WebServlet("/AffichageEtudiants")
public class AffichageEtudiants extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private static final String ArrayList = null;
	private GestionEtudiants G;
    public AffichageEtudiants() {
    	super();
    	this.G=new GestionEtudiants();
        
    }
    public void init()
    {
    	Etudiant e1=new Etudiant("Ahmed","AE176767",9.67);
		Etudiant e2=new Etudiant("Ahmed","AE176767",8.67);
		Etudiant e3=new Etudiant("Ahmed","AE176767",19.67);
		Etudiant e4=new Etudiant("Ahmed","AE176767",18.67);
		G.listEtudiants.add(e1);
		G.listEtudiants.add(e2);
		G.listEtudiants.add(e3);
		G.listEtudiants.add(e4);
    }
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Etudiant e5=new Etudiant("Ahmed","AE176767",19.67);
		Etudiant e6=new Etudiant("Ahmed","AE176767",18.67);
		Etudiant e7=new Etudiant("Ahmed","AE176767",9.67);
		Etudiant e8=new Etudiant("Ahmed","AE176767",8.67);
		G.listEtudiants.add(e5);
		G.listEtudiants.add(e6);
		G.listEtudiants.add(e7);
		G.listEtudiants.add(e8);
		response.setContentType("text/html");
		PrintWriter p = response.getWriter();
		p.println("<html>");
		p.println("<head>");
		p.println("</head>");
		p.println("<body>");
		ArrayList<Etudiant> listeEtudiants=G.getListEtudiant();
		p.println("<table border=\"2\">");		
		for(int i=0;i<listeEtudiants.size();i++)
		{
			if(listeEtudiants.get(i).getMoyenne()>=10)
			{
				p.println("<tr bgcolor=\"green\">");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getNom());
				p.println("</td>");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getCin());
				p.println("</td>");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getMoyenne());
				p.println("</td>");
				p.println("</tr>");
			}
			else
			{
				p.println("<tr bgcolor=\"red\">");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getNom());
				p.println("</td>");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getCin());
				p.println("</td>");
				p.println("<td>");
				p.println(listeEtudiants.get(i).getMoyenne());
				p.println("</td>");
				p.println("</tr>");
			}
				
		}
		p.println("</table>");	
		p.println("</body>");
		p.println("</html>");
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	}
	
}
