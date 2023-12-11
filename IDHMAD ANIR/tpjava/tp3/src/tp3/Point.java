package tp3;

	
	 public class Point extends Object{
	  private int x, y;
	  public Point(){this (0,0);}
	  public Point(int x, int y) {
		super();
		this.x = x;
		this.y = y;
	}
	public void setX(int p) {
	  x = p;
	  }
	  public void setY(int p) {
	  y = p;
	  }
	  public int getX() {
	  return x;
	  }
	  public int getY() {
	  return y;
	  }
	  public void  Déplacer(int L){
		  this.x+=L;
		  this.y+=L;
	  }
	  public void reset() { 
		  this.x=0;
		  this.y=0;
	  }
	  public double distance (Point b) {
		  double dx = this.x - b.x;
	        double dy = this.y - b.y;
	        return Math.sqrt(dx * dx + dy * dy); 
	  }
	  public static double distancedeuxpoints (Point a,  Point b) {
		  double dx = a.x - b.x;
	       double dy = a.y - b.y;
	       return Math.sqrt(dx * dx + dy * dy); 
	  }
	
	 public  boolean equals(Object a){
		  return (this.x == ((Point)a).x &&
		 this.y == ((Point)a).y ) ;
		 }
	  public String toString() {
		  return "(" + x + "," + y + ")" ; 
		 }
	  
	 };


