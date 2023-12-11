package tp4;

public class Article {
	private int respNuméro, quantité;
	private String nom;
	private double prixHT;
	public Article() {
		this.respNuméro=0;
		 this.quantité=222;
		 this.nom="spécimen";
		 this.prixHT=1.1;
	}
	public Article(int respNuméro, int quantité, String nom, double prixHT) {
		super();
		this.setRespNuméro(respNuméro);
		this.setQuantité(quantité);
		this.setNom(nom);
		this.setPrixHT(prixHT);
	}
	public Article(Article a) {
		// TODO Auto-generated constructor stub
	}
	public int getRespNuméro() {
		return respNuméro;
	}
	public void setRespNuméro(int respNuméro) {
		this.respNuméro = respNuméro;
	}
	public String getNom() {
		return nom;
	}
	public void setNom(String nom) {
		this.nom = nom;
	}
	public double getPrixHT() {
		return prixHT;
	}
	public void setPrixHT(double prixHT) {
		this.prixHT = prixHT;
	}
	public int getQuantité() {
		return quantité;
	}
	public void setQuantité(int quantité) {
		this.quantité = quantité;
	}
	public double prixTTC() {
		// TODO Auto-generated method stub
		return 0;
	}
	
	

}
