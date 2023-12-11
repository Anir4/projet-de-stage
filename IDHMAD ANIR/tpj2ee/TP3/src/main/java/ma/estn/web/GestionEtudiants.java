package ma.estn.web;

import java.util.ArrayList;

public class GestionEtudiants {
	static ArrayList<Etudiant> listEtudiants;
	public GestionEtudiants()
	{
		this.listEtudiants=new ArrayList<Etudiant>();
	}
	
	public static ArrayList<Etudiant> getListEtudiant()
	{
		return listEtudiants;
	}	
	
}