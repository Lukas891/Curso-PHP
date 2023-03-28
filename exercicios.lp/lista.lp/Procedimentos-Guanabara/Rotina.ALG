Algoritmo "Rotina"

// Detector de Peso

Var

   I :inteiro
   N, Pesado: caractere
   P, Mai: real
Procedimento topo()
inicio
   escreval("-------------------------------------")
   escreval(" D E T E C T O R   DE   P E S A D O")
   escreval(" Maior Peso ate agora: ", Mai, "Kg")
   escreval("------------------------------------")
fimprocedimento
Inicio
   Limpatela
   topo()
   Para i de 1 ate 5 faca
      escreva("Digite o nome: ")
      leia(N)
      escreva("Digite o peso de ", N, ": ")
      leia(P)
      Se (P>Mai) entao
         Mai := P
         Pesado := N
      Fimse
      limpatela
      topo()
   Fimpara
   Limpatela
   topo()
   escreval("A pesoa mais pesada doi ", Pesado, ", com ", Mai, " quilos.")
Fimalgoritmo
