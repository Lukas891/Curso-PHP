Algoritmo "Exercicio-07"

// 7) Faça um algoritmo que leia a idade de uma pessoa expressa em anos,
// meses e dias e escreva a idade dessa pessoa expressa apenas em dias.
// Considerar ano com 365 dias e mês com 30 dias.

Var

idade, dias, meses, anos : inteiro

Inicio

escreval("Digite sua idade em anos, meses e dias:")
escreval("Quantos anos?")
leia(anos)

escreval("Quantos meses?")
leia(meses)

escreval("Quantos dias?")
leia(dias)

idade := 1*dias + 30*meses + 365*anos
escreval("Voce tem",idade," dias")


Fimalgoritmo