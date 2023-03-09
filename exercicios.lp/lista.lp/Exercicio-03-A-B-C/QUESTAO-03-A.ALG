Algoritmo "Questao-03-A"

// 3) Os pares de instruções abaixo produzem o mesmo resultado?
// a) a = (4/2)+(2/4) & a = 4/2+2/4

Var

a1, a2 : real

Inicio

escreval ("O resultado das operacoes sao iguais?")
escreval ("a1 = (4/2) + (2/4)")
escreval ("&")
escreval ("a2 = 4/2 + 2/4")
a1 := (4/2) + (2/4)
a2 := 4/2 + 2/4
se (a1) = (a2) entao
escreval(verdadeiro)
senao
escreval(falso)
fimse
Fimalgoritmo