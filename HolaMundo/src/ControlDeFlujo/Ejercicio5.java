package ControlDeFlujo;

import java.util.InputMismatchException;
import java.util.Scanner;

public class Ejercicio5 {

	public static void main(String[] args) {

		Scanner teclado = new Scanner(System.in);
		int numero=0;boolean error=false;
		String bisiesto = " ";
		try {
		System.out.println("Introduce un número del 1 al 12");
		do {
			try {
				
				numero = teclado.nextInt();
				error = false;
			} catch (InputMismatchException e) {
				teclado = new Scanner(System.in);
				System.out.println("Por favor,introduce un número del 1 al 12");
				error = true;
			}
		} while (error);
		
		do {
			System.out.println("¿El año es bisiesto?");
			bisiesto = teclado.next();
		} while (!bisiesto.equalsIgnoreCase("si") && !bisiesto.equalsIgnoreCase("no"));

		

			switch (numero) {
			case 1:
			case 3:
			case 5:
			case 7:
			case 9:
			case 11:
				System.out.println("El mes tiene 31 días");
				break;
			case 2:
				if (bisiesto.equalsIgnoreCase("si")) {
					System.out.println("El mes es febrero y tiene 29 días al ser bisiesto");
				} else if (bisiesto.equalsIgnoreCase("no")) {
					System.out.println("El mes es febrero y tiene 28 días al NO ser bisiesto");
				}
				break;
			case 4:
			case 6:
			case 8:
			case 10:
			case 12:
				System.out.println("El mes tiene 30 días");
				break;
			default:
				System.out.println("Este número no pertenece a ningún mes del año");
			}

		} catch (InputMismatchException e) {
			teclado = new Scanner(System.in);
			System.out.println("Error,introduce un numero");
		}

	}

}
