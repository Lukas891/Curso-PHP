Algoritmo "Exercicio-28"

//28) Ler 3 valores (considere que não serão informados valores
// iguais) e escrever o maior deles.

Var

n1, n2, n3 : inteiro

Inicio

escreval("Digite um numero")
leia(n1, n2, n3)
    se (n1 > n2) e (n1 > n3) entao
    escreval("O Primeiro numero e maior")
    senao
         se (n2 > n1) e (n2 > n3) entao
         escreval("O Segundo numero e maior")
         senao
              se (n3 > n1) e (n3 > n2) entao
              escreval("O Terceiro numero e maior")
              fimse
         fimse
    fimse

Fimalgoritmo