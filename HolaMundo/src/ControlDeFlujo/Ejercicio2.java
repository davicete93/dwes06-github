package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio2 {

	public static void main(String[] args) {
		String cadena;
		Scanner teclado=new Scanner(System.in);
		int contador=1;
		String cadenaUnida = " ";
		
		while(contador<=5){
			System.out.println("Introduce una cadena");
			cadena=teclado.next();
			contador++;
			cadenaUnida+=cadena+" ";
			
			
		}
		System.out.println();
		System.out.println(cadenaUnida);
		teclado.close();
	}

}
