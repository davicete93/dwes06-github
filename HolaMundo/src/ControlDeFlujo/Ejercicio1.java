package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio1 {

	public static void main(String[] args) {
		
		Scanner teclado=new Scanner(System.in);
		System.out.println("Escribe un n�mero del 1 al 7");
		int a=teclado.nextInt();
		
		switch(a){
		case 1:
			System.out.println("El d�a es lunes y es laborable");
			break;
		case 2:
			System.out.println("El d�a es martes y es laborable");
			break;
		case 3:
			System.out.println("El d�a es mi�rcoles y es laborable");
			break;
		case 4:
			System.out.println("El d�a es jueves y es laborable");
			break;
		case 5:
			System.out.println("El d�a es viernes y es laborable");
			break;
		case 6:
			System.out.println("El d�a es s�bado y no es laborable");
			break;
		case 7:
			System.out.println("El d�a es domingo y no es laborable");
			break;
		}
		teclado.close();
	}

}
