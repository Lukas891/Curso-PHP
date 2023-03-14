Algoritmo "QUESTAO-04"

// 4) Reescreva as instruções abaixo com o mínimo de parênteses possível, mas sem alterar o
// resultado:
// A 6*(3+2) = 30            F (6/3)+(8/2) = 6
// B 2+(6*(3+2)) = 32        G ((3+(8/2))*4)+(3*2) = 34
// C 2+(3*6)/(2+4) = 5       H (6*(3*3)+6)-10 = 50
// D 2*(8/(3+1)) = 4         I (((10*8)+3)*9) = 747
// E 3+(16-2)/(2*(9-2)) = 4  J ((-12)*(-4))+(3*(-4)) = 36

Var

a, b, c, d, ee, f, g, h, i, j : caracter

Inicio
escreval("Operacoes com o minimo de parenteses, mas sem mudar o resultado!")

a := ("6*(3+2)")
escreval("a = ",a)
a := ("6*(3+2)")
escreval("a = ",a)

b := ("2+(6*(3+2))")
escreval("b = ",b)
b := ("2+6*(3+2)")
escreval("b = ",b)
//
c := ("2+(3*6)/(2+4)")
escreval("c = ",c)
c := ("2+3*6/(2+4)")
escreval("c = ",c)

d := ("2*(8/(3+1))")
escreval("d = ",d)
d := ("2*8/(3+1)")
escreval("d = ",d)

ee := ("3+(16-2)/(2*(9-2))")
escreval("ee = ",ee)
ee := ("3+(16-2)/(2*(9-2))")
escreval("ee = ",ee)

f := ("(6/3)+(8/2)")
escreval("f = ",f)
f := ("6/3+8/2")
escreval("f = ",f)

g := ("((3+(8/2))*4)+(3*2)")
escreval("g = ",g)
g := ("(3+8/2)*4+3*2")
escreval("g = ",g)

h := ("(6*(3*3)+6)-10")
escreval("h = ",h)
h := ("6*3*3+6-10")
escreval("h = ",h)

i := ("(((10*8)+3)*9)")
escreval("i = ",i)
i := ("(10*8+3)*9")
escreval("i = ",i)

j := ("((-12)*(-4))+(3*(-4))")
escreval("j = ",j)
j := ("-12*-4+3*-4")
escreval("j = ",j)


Fimalgoritmo