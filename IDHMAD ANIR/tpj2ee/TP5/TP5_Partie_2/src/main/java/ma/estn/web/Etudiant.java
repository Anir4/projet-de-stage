package ma.estn.web;

public class Etudiant {
	String nom;
	String cin;
	double moyenne;
	public Etudiant()
	{
		this.cin="";
		this.moyenne=0;
		this.nom=nom;
	}
	public Etudiant(String nom,String cin,double moyenne)
	{
		this.nom=nom;
		this.cin=cin;
		this.moyenne=moyenne;
	}
	void setNom(String nom)
	{
		this.nom=nom;
	}
	void setCin(String cin)
	{
		this.cin=cin;
	}
	String getNom()
	{
		return nom;
	}
	String getCin()
	{
		return cin;
	}
	double getMoyenne()
	{
		return moyenne;
	}
	boolean equals(Etudiant e)
	{
		return (cin==e.cin);
	}
}