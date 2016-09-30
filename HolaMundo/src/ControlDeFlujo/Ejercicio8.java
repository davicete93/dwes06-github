package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio8 {

	public static void main(String[] args) {
		int opcion1,opcion2;
		Scanner teclado=new Scanner(System.in);
		System.out.println(" MENÚ ");
		System.out.println("Introduce una opcion entre 0 y 5");
		
		
		do{
			System.out.println("Selecciona un deporte");
			System.out.println("1.Fútbol");
			System.out.println("2.Baloncesto");
			System.out.println("3.Hockey");
			System.out.println("4.Volver");
			opcion1=teclado.nextInt();
			
			switch(opcion1){
			case 1:
			}
		}while(opcion1!=4 || opcion1>4 || opcion1<0);
	}

}
