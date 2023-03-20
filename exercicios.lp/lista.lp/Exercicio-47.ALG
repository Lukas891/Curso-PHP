Algoritmo "semnome"

// 47) Acrescentar uma mensagem de 'VALOR INVÁLIDO' no
// exercício [45] caso o segundo valor informado seja ZERO.

Var

   n1, n2, divi : real

Inicio

   escreval("Digite o primeiro numero:")
   leia(n1)
   enquanto (n2 = 0) faca

      escreval("Digite o segundo numero:")
      leia(n2)
      se (n2 = 0) entao
         escreval("VALOR INVÁLIDO")
      senao
      fimse
   fimenquanto
   divi := n1 / n2
   escreval("O 1o numero dividido pelo 2o e:", divi)

Fimalgoritmo
