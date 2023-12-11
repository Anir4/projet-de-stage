package tp6.ma;
 
class Cellule extends Object implements Cloneable {
	 int i = 0;
	 int[] t = {1, 2};

	 public Object clone(){
		 Cellule tmp = new Cellule();
		 tmp.i=i;
		 tmp.t = (int []) this.t.clone(); 
		 return tmp;
		 } 
	 
	 
	 public void afficher() {
		 System.out.println(i +" "+ t[0]+" "+t[1]);}
	 public void changeMe(){
		 i = 10;
		 t[0] = 11;
		 t[1] = 12;
		}

}
