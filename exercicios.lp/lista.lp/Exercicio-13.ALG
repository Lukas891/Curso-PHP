Algoritmo "Exercicio-13"

// 13) Fa�a um algoritmo que leia tr�s notas de um aluno, calcule e escreva
// a m�dia final deste aluno. Considerar que a m�dia � ponderada e que o
// peso das notas � 2, 3 e 5. F�rmula para o c�lculo da m�dia final �:
//                       n1*2 + n2*3 + n3*5
// mediafinal = -----------------------------------
//                             10

Var

   n1, n2, n3, nFinal : real

Inicio

   escreval("Digite a nota 1")
   leia(n1)

   escreval("Digite a nota 2")
   leia(n2)

   escreval("Digite a nota 3")
   leia(n3)

   nFinal := (n1*2 + n2*3 + n3*5)/(2 + 3 + 5)

   escreval("Nota final e",nFinal)

Fimalgoritmo