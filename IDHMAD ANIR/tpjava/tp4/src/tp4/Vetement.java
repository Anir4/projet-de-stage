package tp4;

public class Vetement extends Article {
    private String taille;
    private String couleur;

    public Vetement(String nom, double prixHT, String taille, String couleur) {
        super();
        this.setTaille(taille);
        this.setCouleur(couleur);
    }

	public String getTaille() {
		return taille;
	}

	public void setTaille(String taille) {
		this.taille = taille;
	}

	public String getCouleur() {
		return couleur;
	}

	public void setCouleur(String couleur) {
		this.couleur = couleur;
	}

   
}