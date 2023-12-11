package tp2.ma;

import java.util.Scanner;

public class test {

	public static void main(String[] args) {
		Pile p=new Pile();
		System.out.print("Veuillez entrer c : ");
		char monchar = 0;
		 Scanner clavier = new Scanner(System.in);
			monchar = clavier.next().charAt(0);
		
		while ( monchar != '#') {
			try {
				p.empiler(monchar);
			} catch (ExceptionPileOverflow e) {
				e.printStackTrace();
			}
			System.out.print("Veuillez entrer le caractere suivant : ");
			monchar = clavier.next().charAt(0);
		
		}
		while(p.estPleine()) {
			char c;
			try {
				c = p.sommet();
			} catch (ExceptionPileUnderflow e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			System.out.println(monchar);
			try {
				p.depiler();
			} catch (ExceptionPileUnderflow e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			}

	}
}
