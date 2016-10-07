package Figuras;

public class Triangulo {

	double base;
	double altura;
	
	/**
	 * 
	 * @param base La base del triangulo
	 * @param altura La altura del triangulo
	 */
	
	public Triangulo(double base,double altura){
		this.base=base;
		this.altura=altura;
	}
	
	public double getBase() {
		return base;
	}
	public void setBase(double base) {
		this.base = base;
	}
	public double getAltura() {
		return altura;
	}
	public void setAltura(double altura) {
		this.altura = altura;
	}
	/**
	 * Método para calcular el área del triángulo
	 * @return el área del triángulo
	 */
	public double calcularArea(){
		return ((base*altura)/2);
	}
	
	/**
	 * Método para calcular el perímetro del triángulo
	 * @return el perímetro del triángulo
	 */
	public double calcularPerimetro(){
		return base*3;
	}
	

	@Override
	public String toString() {
		return "Triangulo [base=" + base + ", altura=" + altura + "]";
	}

	
}
