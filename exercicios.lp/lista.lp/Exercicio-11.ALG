Algoritmo "Exercicio-11"

// 11) Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês,
// mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele
// efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas
// vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o salário final do
// vendedor.

Var

CarV, TotalV, SalF, Comiss, SalFinal : real

Inicio

escreval("Digite quantos carros vendidos")
leia(CarV)

escreval("Digite total de vendas")
leia(TotalV)

escreval("Digite o salario fixo")
leia(SalF)

escreval("Digite a comissao")
leia(Comiss)

SalFinal := (CarV*Comiss)+(TotalV*0.05)+SalF

escreva("Salario final: ",SalFinal)



Fimalgoritmo