package tp4;

public class GestionPrix {

	public static void afficherPrixTTC(Article article) {
        System.out.println("Prix TTC : " + article.prixTTC());
    }

    public static void main(String[] args) {
        Article article = new Article(0, 0, "Livre", 30.0);
        Vetement vetement = new Vetement("Chemise", 50.0, "M", "Bleu");
        ArticleLuxe articleLuxe = new ArticleLuxe("Montre de luxe", 1000.0);
        afficherPrixTTC(article);     
        afficherPrixTTC(vetement);    
        afficherPrixTTC(articleLuxe);  
    }

}
