package exercicio08;

import java.util.Scanner;

public class exercicio08 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double valores;
        System.out.println("Digite o 1 numero: ");
        valores= scanner.nextDouble();
        for(int num=2;num <=5; num++){
            System.out.println("Digite o "+num+" numero: ");
            int numeros = scanner.nextInt();
            
            double soma = (valores+numeros);
            System.out.println("A soma dos números é: "+soma);
        }
    }
}
