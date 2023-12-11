package tp2.ma;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Date;
import java.text.SimpleDateFormat;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class servlet
 */
@WebServlet("/servlet")
public class servlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public servlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html");
		PrintWriter p = response.getWriter();
		p.print("Bonjour Servlet");

        int N = 5; // Nombre de lignes
        int M = 3; // Nombre de colonnes

        PrintWriter out = response.getWriter();
        out.println("<html><body>");

        out.println("<table border='1'>");
        for (int i = 0; i < N; i++) {
            out.println("<tr>");
            for (int j = 0; j < M; j++) {
                out.println("<td>Ligne " + (i + 1) + ", Colonne " + (j + 1) + "</td>");
            }
            out.println("</tr>");
        }
        out.println("</table>");
        //date
        Date currentDate = new Date(M);
        SimpleDateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy HH:mm:ss");
        out.println("<p>Date courante : " + dateFormat.format(currentDate) + "</p>");
       //etudiant et moyenne
        String[] students = {"Alice", "Bob", "Charlie"};
        double[] moyenne = {15.5, 19.0, 10.3};

        // Afficher les noms et les moyennes
        out.println("<table border='1'>");
        out.println("<tr><th>Nom</th><th>Moyenne</th></tr>");
        for (int i = 0; i < students.length; i++) {
            out.println("<tr>");
            out.println("<td>" + students[i] + "</td>");
            out.println("<td>" + moyenne[i] + "</td>");
            out.println("</tr>");
        }
        out.println("</table>");

        out.println("</body></html>");
    }
	
	

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
	}

}
