Algoritmo "QUESTAO-03-B"

// 3) Os pares de instruções abaixo produzem o mesmo resultado?
// b = 4/(2+2)/4 e b = 4/2 + 2/4

Var

b1, b2 : real

Inicio

escreval ("O resultado das operacoes sao iguais?")
escreval ("b = 4/(2+2)/4")
escreval ("&")
escreval ("b = 4/2+2/4")
b1 := 4/(2+2)/4
b2 := 4/2 + 2/4
se (b1) = (b2) entao
escreval(verdadeiro)
senao
escreval(falso)
FIMSE

Fimalgoritmo