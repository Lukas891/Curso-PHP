Algoritmo "Exercicio-29"

// 29) Ler 3 valores (considere que não serão informados valores
// iguais) e escrever a soma dos 2 maiores.

Var

   n1, n2, n3, soma : inteiro

Inicio

   escreval("Digite 3 numeros")
   leia(n1, n2, n3)
   se (n1 < n2) e (n1 < n3) entao
      soma := n2 + n3
      escreval("A soma dos 2 maiores numeros e",soma)
      senao
      se (n2 < n1) e (n2 < n3) entao
         soma := n1 + n3
         escreval("A soma dos 2 maiores numeros e",soma)
         senao
         se (n3 < n1) e (n3 < n2) entao
            soma := n2 + n1
            escreval("A soma dos 2 maiores numeros e",soma)
         fimse
      fimse
   fimse

Fimalgoritmo