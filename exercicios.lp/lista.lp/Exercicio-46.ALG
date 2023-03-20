Algoritmo "Exercicio-46"

// 46) Acrescentar uma mensagem de 'VALOR INVÁLIDO'no exercício
// [44] caso o segundo valor informado seja ZERO.
Var

   n1, n2, divi : real

Inicio

   escreval("Digite um numero:")
   leia(n1)
   repita
      Escreval("Digite outro numero")
      leia (n2)
      se (n2 = 0) entao
         escreval("VALOR INVÁLIDO")
      senao
      fimse
   ate (n2 > 0)
   divi := n1 / n2
   escreval("O resultado do primeiro numero dividido pelo segundo e:",divi)

Fimalgoritmo