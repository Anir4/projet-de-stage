package tp8tp8.ma;

public class Article implements MonApi{
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
		return 0;
	}
	@Override
	public void print() {
		System.out.println(convTexte());
		
	}
	@Override
	public String convTexte() {
		String s ="{" + respNuméro + ","+  prixHT + "," + ","+ quantité + "}" ;
	         return s;

	}
	@Override
	public int compare(Article a) {
		 Article w = (Article) a; 
		 if (respNuméro > w.respNuméro) 
		 return 1;
		 else if (respNuméro < w.respNuméro) 
		 return -1;
		 else 
		 return 0;

	}
	@Override
	public int compare(Point p) {
		return 0;
	}
	
	
	
	

}
