package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio1 {

	public static void main(String[] args) {
		
		Scanner teclado=new Scanner(System.in);
		System.out.println("Escribe un número del 1 al 7");
		int a=teclado.nextInt();
		
		switch(a){
		case 1:
			System.out.println("El día es lunes y es laborable");
			break;
		case 2:
			System.out.println("El día es martes y es laborable");
			break;
		case 3:
			System.out.println("El día es miércoles y es laborable");
			break;
		case 4:
			System.out.println("El día es jueves y es laborable");
			break;
		case 5:
			System.out.println("El día es viernes y es laborable");
			break;
		case 6:
			System.out.println("El día es sábado y no es laborable");
			break;
		case 7:
			System.out.println("El día es domingo y no es laborable");
			break;
		}
		teclado.close();
	}

}
