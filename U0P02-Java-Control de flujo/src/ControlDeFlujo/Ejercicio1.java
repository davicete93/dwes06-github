package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio1 {

	private static Scanner leer;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		leer = new Scanner(System.in);  
		int op;
		System.out.println("�Qu� d�a de la semana es?");
		
		System.out.println("1.Lunes");
		System.out.println("2.Martes");
		System.out.println("3.Mi�rcoles");
		System.out.println("4.Jueves");
		System.out.println("5.Viernes");
		System.out.println("6.S�bado");
		System.out.println("7.Domingo");
		
		
		op= leer.nextInt();
		
		switch(op) {
			
		case 1:System.out.println("Laborable");break;
		case 2:System.out.println("Laborable");break;
		case 3:System.out.println("Laborable");break;
		case 4:System.out.println("Laborable");break;
		case 5:System.out.println("Laborable");break;
		case 6:System.out.println("No laborable");break;
		case 7:System.out.println("No laborable");break;
		default:System.out.println("Dato err�neo");
	
		
		
	}

}
}
	
