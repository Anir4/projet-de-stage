package tp2.ma;

import java.util.Scanner;
//exercice1
public class Pile {
	static final int MAX = 8;
	char t[]; 
	int top;
	public Pile() {
		t = new char[MAX];
		top = -1;
		}
	public void empiler(char c)throws  ExceptionPileOverflow {
		if (!estPleine())
		t[++top] = c;
		else
			 throw new ExceptionPileOverflow();}
			 public char sommet() throws ExceptionPileUnderflow {
				  if (!estVide())
				  return t[top];
				  else
				  throw new ExceptionPileUnderflow();
				  }

		
			 public void depiler()throws ExceptionPileUnderflow {
				  if (!estVide())
				  top--;
				  else
				  throw new ExceptionPileUnderflow();
				  }
			 public String toString() {
				 String a="";
				 for (int i=0;i<=top;i++) {
					 a=a+t[i];
				 } return a;
			 }
			public boolean estVide() {
				return (top < 0);
			}
			
			 public boolean estPleine() {
				 return (top ==t.length-1);
			 }
			
	
		//ex2:
			 char a;
			 Pile p2=new Pile();
			 Scanner clavier = new Scanner(System.in);
					 a = clavier.next().charAt(0);
			 while(a!='#') {
	if(a=='(') {
	try{p2.empiler(a);}
	 catch (ExceptionPileOverflow e) {
		  System.out.println("la pile est plaine");
		  e.printStackTrace();
		  }
	System.out.print("Veuillez entrer le caractere suivant : ");
	a = clavier.next().charAt(0);

}}
	if(a==')') {
		try{p2.depiler();}
		 catch ( ExceptionPileUnderflow e) {
			  System.out.println("la pile est vide");
			  e.printStackTrace();
			  }
		System.out.print("Veuillez entrer le caractere suivant : ");
		a = clavier.next().charAt(0);
	
	}	
	}}


