package tp8tp8.ma;

public class test {

	public static void main(String[] args) {
		MonApi point = new Point(1,2);
		MonApi article = new Article (1,100 ,"Pomme",11.1);
		point.print();
		article.print();
		String s = point.convTexte();
		String t = article.convTexte();


	}

}
