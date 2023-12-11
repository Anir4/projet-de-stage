package tp6.ma;

public class test {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
			Cellule x = new Cellule();
			x.afficher();
			Cellule y = (Cellule) x.clone(); 
			y.afficher();
			x.changeMe();
			x.afficher();
			y.afficher();
	}

}
