Algoritmo "Exercicio-16"
// 16) As maçãs custam R$ 1,30 cada se forem compradas menos de uma dúzia,
// e R$ 1,00 se forem compradas pelo menos 12. Escreva um programa que
// leia o número de maçãs compradas, calcule e escreva
// o custo total da compra.
Var

   M, VP, VN : real

Inicio


   escreval("Digite quantas macas compradas:")
   leia(M)
   se (M <= 12) entao
      escreval ("Promocao nao aplicada")
      VN := M * 1.30
      escreval("Valor total das macas:",VN," reais")
   senao
      se (M > 12) entao
         escreval("Promocao aplicada")
         VP := M * 1
         escreval("Valor total das macas:",VP," reais")
      fimse
   fimse
Fimalgoritmo