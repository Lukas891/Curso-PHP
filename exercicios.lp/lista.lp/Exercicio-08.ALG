Algoritmo "Exercicio-08"

// 8) Escreva um algoritmo para ler o número total de eleitores
// de um município, o número de votos brancos, nulos e válidos.
// Calcular e escrever o percentual que cada um representa em relação
// ao total de eleitores.

Var

Total, B, N, V : inteiro
PB, PN, PV: real

Inicio

escreval ("Total de votos em branco:")
leia(B)

escreval ("Total de votos Nulos:")
leia(N)

escreval ("Total de votos Validos")
leia(V)

Total := B + N + V
escreval ("Total de eleitores:",Total)

PB := Total/B
escreval ("O percentual de Votos em Branco e",PB,"%")

PN := Total/N
escreval ("O percentual de Votos Nulos e",PN,"%")

PV := Total/V
escreval ("O percentual de Votos Validos e",PV,"%")

Fimalgoritmo