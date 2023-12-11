package tp4;

public class ArticleLuxe extends Article {
    public ArticleLuxe(String nom, double prixHT) {
        super();
    }

    @Override
    public double prixTTC() {
        return getPrixHT() * 1.25;  
    }
}
