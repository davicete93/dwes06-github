package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio9 {

	public static void main(String[] args) {
		int num;
		Scanner teclado=new Scanner(System.in);
		System.out.println("Introduce un numero para comprobar si es par o impar");
		num=teclado.nextInt();
		
		if(num==0){
			System.out.println("El numero no es par ni impar,es 0");
		}else if(num%2==0){
			System.out.println("El numero es par");
		}else{
			System.out.println("El numero es impar");
		}
	}

}
