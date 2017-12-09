package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio4a {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner leer = new Scanner(System.in);
		System.out.println("Probamos el primer caso");
		incorrecto();
		System.out.println("Probamos el segundo caso");
		mal();
		
	}
	public static void incorrecto() {
		try {
		int numero;
		Scanner leer=new Scanner(System.in);
		System.out.println("Introduce un numero");
		numero=leer.nextInt();	
		System.out.println("El numero introducido es: "+numero);
		}catch(Exception e) {
			System.out.println("El valor introducido es incorrecto");
		}
	}
	
	public static void mal() {
			int numero;
			Scanner leer=new Scanner(System.in);
			System.out.println("Introduce un numero entre 1 y 10");
			numero=leer.nextInt();
			if(numero>10 || numero<1) {
				System.out.println("Error,el numero tiene que estar entre 1 y 10,vuelve a introducirlo");
				numero=leer.nextInt();
				System.out.println("El numero es: "+numero);
			}else {
				System.out.println(numero);
			}
	}
}

