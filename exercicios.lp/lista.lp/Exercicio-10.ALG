Algoritmo "Exercicio-10"
// 10) O custo de um carro novo ao consumidor � a soma do custo de f�brica com a porcentagem do
// distribuidor e dos impostos (aplicados ao custo de f�brica). Supondo que o percentual do distribuidor
// seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de f�brica de um carro,
// calcular e escrever o custo final ao consumidor.
Var

Carro, Dist, Imp, CarroFinal : real

Inicio

escreval("Digite o valor do carro")
leia(Carro)

Imp := 45/100*Carro
Dist := 28/100*Carro
CarroFinal := Carro + Dist + Imp

escreval("O valor do carro sera",CarroFinal)


Fimalgoritmo