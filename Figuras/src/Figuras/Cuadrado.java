package Figuras;

public class Cuadrado {

	double lado;
	
	public Cuadrado(double lado){
		this.lado=lado;
	}

	public double getLado() {
		return lado;
	}

	public void setLado(double lado) {
		this.lado = lado;
	}
	/**
	 * M�todo para calcular el �rea del cuadrado
	 * @return el �rea del cuadrado
	 */
	public double calcularArea(){
		return Math.pow(lado, 2);
	}
	/**
	 * M�todo para calcular el per�metro del cuadrado
	 * @return el per�metro del cuadrado
	 */
	public double calcularPerimetro(){
		return lado*4;
	}
	

	@Override
	public String toString() {
		return "Cuadrado [lado=" + lado + "]";
	}
	
}
