Algoritmo "Exercicio-81"

// 81) O mesmo exerc�cio anterior, mas agora deve escrever o menor
// elemento do vetor e a respectiva posi��o dele nesse vetor.

Var

   Q: vetor[1..5] de inteiro
   i, posicao, menor: inteiro

inicio

   para i de 1 ate 5 faca
      escreval("Digite o", i, "� numero:")
      leia(Q[i])
      enquanto (Q[i] < 0) faca
         escreval("Digite um valor positivo")
         leia(Q[i])
      fimenquanto
   fimpara

   menor := Q[i]
   
   para i de 1 ate 5 faca
      se (Q[i] < menor) entao
         menor := Q[i]
         posicao := i
      fimse
   fimpara

   escreval("Menor elemento do vetor Q:", menor)
   escreval("Posi��o:", posicao)

fimalgoritmo
