Algoritmo "Exercicio-33"

// 33) Ler dois valores e imprimir uma das tr�s mensagens a seguir:
// �N�meros iguais�, caso os n�meros sejam iguais
// �Primeiro � maior�, caso o primeiro seja maior que o segundo;
// �Segundo maior�, caso o segundo seja maior que o primeiro.
Var

   n1, n2 : inteiro

Inicio

   escreval("Digite 3 valores:")
   leia(n1, n2)
   se (n1 > n2) entao
      escreval("O Primeiro numero e maior")
   senao
      se (n2 > n1)entao
         escreval("O Segundo numero e maior")
      senao
         se (n1 = n2) entao
            escreval("N�meros iguais")
         fimse
      fimse
   fimse

Fimalgoritmo