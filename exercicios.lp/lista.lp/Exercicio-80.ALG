Algoritmo "Exercicio-80"

// 80) Ler um vetor Q de 20 posi��es (aceitar somente n�meros positivos).
// Escrever a seguir o valor do maior elemento de Q e a respectiva posi��o
// que ele ocupa no vetor.

Var

   Q: vetor[1..6] de inteiro
   i, posicao, maior: inteiro

inicio
   
   para i de 1 ate 5 faca
      escreval("Digite o", i, "� numero:")
      leia(Q[i])
      enquanto (Q[i] < 0) faca
         escreval("Digite um valor positivo")
         leia(Q[i])
      fimenquanto
   fimpara
   
   maior := 0

   para i de 1 ate 5 faca
      se (Q[i] > maior) entao
         maior := Q[i]
         posicao := i
      fimse
   fimpara
   
   escreval("Maior elemento do vetor Q:", maior)
   escreval("Posi��o:", posicao)
   
fimalgoritmo
