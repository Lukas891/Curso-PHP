Algoritmo "Exercicio-12"

//  12) Escreva um algoritmo para ler uma temperatura em graus Fahrenheit,
//  calcular e escrever o valor correspondente em graus Celsius
// (baseado na fórmula abaixo):
//         C          F - 32
//     ---------- = -----------
//         5            9

Var

F : inteiro
C : real

Inicio

escreval("Digite o grau em Fahrenheit")
leia(F)

C := (F-32)*5/9

escreval("Graus Fahrenheit sao",C," Celcius")

Fimalgoritmo