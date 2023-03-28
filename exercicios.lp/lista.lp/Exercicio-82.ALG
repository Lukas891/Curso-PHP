Algoritmo "Exercicio-82"

// 82) Ler um vetor A de 10 números. Após, ler mais um número e guardar
// em uma variável X. Armazenar em um vetor M o resultado de cada elemento
// de A multiplicado pelo valor X. Logo após, imprimir o vetor M

Var

   A, M, Resultados : vetor [1..10] de inteiro
   X, i : inteiro

Inicio

   escreval("Escreva os numeros que deseja multiplicar!")
   para i de 1 ate 10 faca
      escreval("Digite o", i,"o. numero:")
      leia(A[i])
   fimpara

   escreval("Digite um numero para multiplicar os numeros: ")
   leia(X)

   para i de 1 ate 10 faca
      M[X] := (X * A[i])
      escreval("O resultado do", i,"o. numero e:", M[X])
   fimpara

Fimalgoritmo