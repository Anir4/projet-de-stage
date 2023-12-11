package tp4;

public class PolyMorph {
	public static void main(String args[]){
		Article[] chariot = {
		new Article(1,10,"Pomme", 100 ),
		new ArticleLuxe( "iPhone", 100),
		new Vetement("Pull", 100, "l", "Vert")
		} ;
		double montant = 0;
		for (Article p:chariot) {
		montant += p.prixTTC();
		}
		System.out.println(montant);
		}

}
