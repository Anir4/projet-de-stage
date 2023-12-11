package ma.estn.web;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class identification
 */
@WebServlet("/identification")
public class identification extends HttpServlet {
	private static final long serialVersionUID = 1L;
    public identification() 
    {
        super();
    }
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
		String login=(String)request.getParameter("login");
		String password=(String)request.getParameter("password");
		if(login.equals("admin") && password.equals("admin"))
		{
			request.setAttribute("login", login);
			request.setAttribute("password",password);
			request.setAttribute("Connexion", true);
			request.getRequestDispatcher("acceuil.jsp").forward(request, response);
		}
		else
		{
			request.setAttribute("Connexion", false);
			request.getRequestDispatcher("acceuil.jsp").forward(request, response);
		}
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
		
		
	}

}
