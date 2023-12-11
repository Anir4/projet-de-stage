package ma.estn.web;

import java.io.IOException;
import javax.servlet.ServletConfig;
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
    public identification() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
		String login=request.getParameter("login");
		String password=request.getParameter("password");
		if(login.equals("admin") && password.equals("admin"))
		{
			getServletContext().getRequestDispatcher("/succes.html").forward(request, response);
		}
		else
		{
			getServletContext().getRequestDispatcher("/echec.html").forward(request, response);
		}
	}
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

}
