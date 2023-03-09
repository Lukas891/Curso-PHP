Algoritmo "QUESTAO-03-C"

// 3) Os pares de instruções abaixo produzem o mesmo resultado?
// c = (4+2)*2-4 & c = 4+2*2-4
Var

c1, c2 : real

Inicio

escreval ("O resultado das operacoes sao iguais?")
escreval ("c1 = (4+2)*2-4")
escreval ("&")
escreval ("c2 = 4+2*2-4")
c1 := (4+2)*2-4
c2 := 4+2*2-4
se (c1) = (c2) entao
escreval(verdadeiro)
senao
escreval(falso)
FIMSE


Fimalgoritmo