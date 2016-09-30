package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Ejercicio3 {

	public static void main(String[] args) {
		
		int numero;
		int resultado=0;
		boolean error=false;
		Scanner teclado=new Scanner(System.in);
		
		while(resultado<=50){
		try{
		do{
		System.out.println("Introduce un numero");
		numero=teclado.nextInt();
		resultado+=numero;
		}while(resultado<=50 && error==false);
		
		}catch(InputMismatchException e){
			teclado=new Scanner(System.in);
			System.out.println("Error,introduce un número");
			error=true;
		}
	}
		System.out.println("El resultado de la suma de números es "+resultado);
		teclado.close();
}
}
