Algoritmo "Exercicio-44"

// 44) Escreva um algoritmo para ler 2 valores e se o segundo valor informado
// for ZERO, deve ser lido um novo valor, ou seja, para o segundo valor não pode
// ser aceito o valor zero e imprimir o resultado da divisão do primeiro valor
// lido pelo segundo valor lido. (utilizar a estrutura REPITA).
Var

   n1, n2, divi : real

Inicio

   escreval("Digite um numero:")
   leia(n1)
   repita
      Escreval("Digite outro numero")
      leia (n2)
   ate (n2 <> 0)
   divi := n1 / n2
   escreval("O resultado do primeiro numero dividido pelo segundo e:",divi)

Fimalgoritmo