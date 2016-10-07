package Figuras;

public abstract class Figura {

	String titulo;
	Color color;
	
	public Figura(String titulo,Color color){
		this.titulo=titulo;
		this.color=color;
	}
	

	public String getTitulo() {
		return titulo;
	}


	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}


	public Color getColor() {
		return color;
	}


	public void setColor(Color color) {
		this.color = color;
	}


	public abstract double calcularArea();
	public abstract double calcularPerimetro();
}
