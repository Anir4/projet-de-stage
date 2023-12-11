package tp2.ma;

import java.util.Scanner;

public class paranthese {
	    public static void main(String[] args) {
	        Pile pile = new Pile();

	        System.out.println("Veuillez entrer une série de parenthèses (terminez par #) : ");
	        Scanner scanner = new Scanner(System.in);
	        String expression = scanner.nextLine();

	        for (int i = 0; i < expression.length(); i++) {
	            char ch = expression.charAt(i);

	            if (ch == '(') {
	            	try {pile.empiler(ch);}
	            	catch(ExceptionPileOverflow e){
	            		System.out.println("la pile est plaine");
	  				  e.printStackTrace();
	            	}
	            } else if (ch == ')') {
	                try {
	                    pile.depiler();
	                } catch (ExceptionPileUnderflow e) {
	                	System.out.println("la pile est vide");
						  e.printStackTrace();}
	            } else if (ch == '#') {
	                break;
	            }
	        }

	        if (pile.estVide()) {
	            System.out.println("L'expression est bien parenthésée.");
	        } else {
	            System.out.println("Erreur : Plus de parenthèses fermantes que de parenthèses ouvrantes.");
	        }
	    }
	}
