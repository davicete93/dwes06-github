package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio6 {


	public static void main(String[] args) {
		int a,b;
		Scanner leer=new Scanner(System.in);
		
		do {
		System.out.println("Introduce el primer numero entre 1 y 10");
		a=leer.nextInt();
		System.out.println("Introduce el segundo numero entre 1 y 10");
		b=leer.nextInt();
		}while(a>10 || a<1 && b>10 || a<1);
		
		if(a<b) {
			do {
			System.out.print("*");
			a++;
			}while(a!=b);
		}
		if(b<a) {
			do {
			System.out.print("*");
			b++;
			}while(b!=a);
		}
	}

}
