package tp7.ma;
	import java.util.Scanner;

public class pile2 {	
	static final int MAX = 8; 
	int top;
	StringBuilder s = new StringBuilder(MAX);
	public pile2(int i) {
	}
	public void empiler(char c) {
		s.insert (++top, c);}
		 public char sommet(){
			  return  s.charAt (top);}

	
		 public void depiler(){
			 top--;}
		 public String toString() {
			 String a="";
			 for (int i=0;i<=top;i++) {
				 a=a+s.charAt (i);
			 } return a;
		 }
		public boolean estVide() {
			return (top < 0);
		}
		
		 public boolean estPleine() {
			 return (top ==s.charAt (MAX));
		 }
		
		 public static void main(String[] args) {


	        Scanner scanner = new Scanner(System.in);

	        pile2 maPile = new pile2(100);

	        System.out.println("Entrez des caractères (terminez par '#'):");

	        char caractereLu;
	        do {
	            caractereLu = scanner.next().charAt(0);
	            maPile.empiler(caractereLu);
	        } while (caractereLu != '#');

	        System.out.println("Caractères en ordre inverse :");
	        while (!maPile.estVide()) {
	            System.out.println(maPile. toString());
	        }

	        scanner.close();
	   
	

}
}
