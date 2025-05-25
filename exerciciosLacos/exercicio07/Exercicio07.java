import java.util.Scanner;

public class Exercicio07 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double numero;
        System.out.println("Digite o 1 número: ");
        numero= scanner.nextDouble();
        for(int contador=2; contador<=5;contador++){
            System.out.println("Digite o "+contador+" numero");
            int numeros = scanner.nextInt();
            if (numeros>numero) {
                numero = numeros;
            }
        }System.out.println("O número maior é "+numero);
    }
}