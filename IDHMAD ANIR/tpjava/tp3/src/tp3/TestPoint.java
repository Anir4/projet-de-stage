package tp3;

public class TestPoint {


static public void main(String args[]){
	 Point p = new Point(0, 0); 
	 p.setX (3);
	 p.setY (4);
	 System.out.println( p.getX() );
	 System.out.println( p.getY() ); 
	 
	 Point a = new Point(1, 2);
     Point b = new Point(2, 3);
     double distancePoint = a.distance(b);
     System.out.println("Distance entre les points : " + distancePoint);
     double distance = p.distancedeuxpoints(a,b);
     System.out.println("Distance entre les points : " + distance);
     Point q1 = new Point(1, 2);
     Point q2 = a;
     System.out.println( "cas 1" +a.equals(q1));
     System.out.println( "cas 2" +a.equals(q2));
	 }
}