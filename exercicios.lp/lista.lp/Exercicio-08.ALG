Algoritmo "Exercicio-08"

// 8) Escreva um algoritmo para ler o n�mero total de eleitores
// de um munic�pio, o n�mero de votos brancos, nulos e v�lidos.
// Calcular e escrever o percentual que cada um representa em rela��o
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

PB := B/Total*100
escreval ("O percentual de Votos em Branco e",PB,"%")

PN := N/Total*100
escreval ("O percentual de Votos Nulos e",PN,"%")

PV := V/Total*100s
escreval ("O percentual de Votos Validos e",PV,"%")
escreval ("Total de eleitores:",Total)
Fimalgoritmo