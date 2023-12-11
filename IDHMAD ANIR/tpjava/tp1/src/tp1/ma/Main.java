package tp1.ma;

import java.lang.Math;

class Test {
    static public void main(String args[]) {
        System.out.println("e = " + Math.E);
        System.out.println("pi = " + Math.PI);
        int largeur = 3, longueur = 4;
        double w = Math.pow(largeur,2) + Math.pow(longueur,2);
        double hypotenuse = Math.sqrt(w);
        System.out.println("Hypoténuse = " + hypotenuse);
        int max = 49;
        int min = 1;
        int nbr = (int) (Math.random() * (max - min + 1)) + min;
    }
}
