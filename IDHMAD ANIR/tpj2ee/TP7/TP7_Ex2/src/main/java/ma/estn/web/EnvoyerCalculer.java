package ma.estn.web;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class EnvoyerCalculer
 */
@WebServlet("/EnvoyerCalculer")
public class EnvoyerCalculer extends HttpServlet {
	private static final long serialVersionUID = 1L;
    public EnvoyerCalculer() {
        super();
    }
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
		if(request.getParameter("Op1").equals("") || request.getParameter("Op2").equals(""))
		{
			request.setAttribute("Error1", true);
			request.getRequestDispatcher("saisie.jsp").forward(request, response);
		}
		else if(request.getParameter("Choix").equals("/") && (request.getParameter("Op2").equals("0")))
		{
			request.setAttribute("Error2", true);
			request.getRequestDispatcher("saisie.jsp").forward(request, response);
		}
		else
		{
			if(request.getParameter("Choix").equals("+"))
			{
				int num1=Integer.parseInt(request.getParameter("Op1"));
				int num2=Integer.parseInt(request.getParameter("Op2"));
				request.setAttribute("result", num1+num2);
				request.getRequestDispatcher("resultat.jsp").forward(request, response);
			}
			else if(request.getParameter("Choix").equals("-"))
			{
				int num1=Integer.parseInt(request.getParameter("Op1"));
				int num2=Integer.parseInt(request.getParameter("Op2"));
				request.setAttribute("result", num1-num2);
				request.getRequestDispatcher("resultat.jsp").forward(request, response);
			}
			else if(request.getParameter("Choix").equals("x"))
			{
				int num1=Integer.parseInt(request.getParameter("Op1"));
				int num2=Integer.parseInt(request.getParameter("Op2"));
				request.setAttribute("result", num1*num2);
				request.getRequestDispatcher("resultat.jsp").forward(request, response);
			}
			else if(request.getParameter("Choix").equals("/"))
			{
				int num1=Integer.parseInt(request.getParameter("Op1"));
				int num2=Integer.parseInt(request.getParameter("Op2"));
				request.setAttribute("result", (num1/num2));
				request.getRequestDispatcher("resultat.jsp").forward(request, response);
			}
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
