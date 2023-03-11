Algoritmo "Exercicio-09"

// 9) Escreva um algoritmo para ler o salário mensal atual
// de um funcionário e o percentual de reajuste.
// Calcular e escrever o valor do novo salário.

Var

// SA = Salario Atual
// RJ = Reajuste
// SN = Salario Novo
// VR = Valor do Reajuste

SA, RJ : inteiro
SN, VR: real

Inicio

escreval("Digite o salario atual:")
leia(SA)

escreval("Porcentagem de reajuste:")
leia(RJ)

VR := (SA*RJ)/100
SN := VR + SA
escreval("O novo salrario e", SN)

Fimalgoritmo