Algoritmo "Exercicio-83"

// 83) Faça um algoritmo para ler 20 números e armazenar em um vetor.
// Após a leitura total dos 20 números, o algoritmo deve escrever esses
// 20 números lidos na ordem inversa.

Var

   V : vetor [1..5] de inteiro
   i : inteiro
   
Inicio

   para i de 1 ate 5 faca
      leia(V[i])
   fimpara

   para i de 5 ate 1 passo -1 faca
      escreval(V[i])
   fimpara

Fimalgoritmo