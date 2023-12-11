package tp4;

public class TestArticle {

	public static void main(String[] args) {
		Article a = new Article () ;;
			Article a1 = new Article(1,100 ,"Pomme",11.1);
			Article a3 = new Article(a);
			System.out.println(a.getRespNuméro());
			System.out.println(a. getNom());
			System.out.println(a.getPrixHT());
			System.out.println(a.getQuantité());

	}

}
