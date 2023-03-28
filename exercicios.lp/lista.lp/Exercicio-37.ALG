Algoritmo "Exercicio-37"

// 37) Uma fruteira está vendendo frutas com a seguinte tabela de preços:
//             |  Até 5 Kg    |   Acima de 5 Kg    |
// -----------------------------------------------
// |Morango    | R$ 2,50 por  |  Kg R$ 2,20 por Kg |
// |Maçã       | R$ 1,80 por  |  Kg R$ 1,50 por Kg |
// Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra
// ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total.
// Escreva um algoritmo para ler a quantidade (em Kg) de
// morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor
// a ser pago pelo cliente.

Var

   Mo, Ma, MoTotal, MaTotal, VTotal, DVTotal : real

Inicio

   escreval("Digite quantos KG de Morangos comprados: ")
   leia(Mo)
   se (Mo <= 5) entao
      MoTotal := Mo * 2.5
   senao
      MoTotal := Mo * 2.2
   fimse
   escreval("O Valor Total de morangos foi: R$",MoTotal)
   escreval("Digite quantos KG de Macas comprados: ")
   leia(Ma)
   se (Ma <= 5) entao
      MaTotal := Ma * 1.8
   senao
      MaTotal := Ma * 1.5
   fimse
   escreval("O Valor Total de Macas foi: R$",MaTotal)

   VTotal := MaTotal + MoTotal
   escreval("Total da compra foi: R$", VTotal)
   se (VTotal > 25) entao
      DVtotal := (VTotal*10)/100
      VTotal := Vtotal - DVTotal
      escreval("Desconto de: R$",DVTotal," aplicado")
      escreval("Valor total da compra com desconto: R$",VTotal)
   senao
      escreval("Desconto nao aplicado a compra")
   fimse

Fimalgoritmo