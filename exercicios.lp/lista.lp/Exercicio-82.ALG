Algoritmo "Exercicio-82"

// 82) Ler um vetor A de 10 n�meros. Ap�s, ler mais um n�mero e guardar
// em uma vari�vel X. Armazenar em um vetor M o resultado de cada elemento
// de A multiplicado pelo valor X. Logo ap�s, imprimir o vetor M

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