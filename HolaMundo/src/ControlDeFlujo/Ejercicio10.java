package ControlDeFlujo;

import java.util.Scanner;

public class Ejercicio10 {

	public static void main(String[] args) {
		int num1,num2;
		int suma=0;
		int resta=0;
		int producto=0;
		double division=0.0;
		Scanner teclado=new Scanner(System.in);
		System.out.println("Introduce dos numeros");
		num1=teclado.nextInt();
		num2=teclado.nextInt();
		
		suma=num1+num2;
		if(num1>num2){
			resta=num1-num2;
		}else{
			resta=num2-num1;
		}
		producto=num1*num2;
		if(num1==0 || num2==0){
			System.out.println("Error, no se puede dividir entre 0");
		}else{
			division=(num1/num2);
		}
		System.out.println("La suma de los dos numeros es "+suma);
		System.out.println("La resta de los dos numeros es "+resta);
		System.out.println("El producto de los dos numeros es "+producto);
		System.out.println("La division de los dos numeros es "+division);
	}

}
