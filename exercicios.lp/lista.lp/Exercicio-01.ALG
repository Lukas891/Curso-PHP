Algoritmo "Exercicio-01"

// 1) Escreva um algoritmo que armazene o valor 10 em uma vari�vel A e o valor 20 em uma vari�vel B.
// A seguir (utilizando apenas atribui��es entre vari�veis) troque os seus conte�dos fazendo com que o
// valor que est� em A passe para B e vice-versa. Ao final, escrever os valores que ficaram armazenados
// nas vari�veis.

Var
a, b : inteiro

Inicio

a := 10
b := 20

escreval("a =", a)
escreval("b =", b)

a := b + a
b := a - b
a := a - b

escreval ("a =", a)
escreval ("b =", b)


Fimalgoritmo