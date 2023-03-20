Algoritmo "Exercicio-48"

// 48) Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno,
// calcule e imprima a média (simples) desse aluno. Só devem ser aceitos
// valores válidos durante a leitura (0 a 10) para cada nota.

Var

   P1, P2, cont1, cont2, media, nota, qntd, soma : real

Inicio

   escreval("Digite valor de cada nota:")
   cont1 := 1
   enquanto (cont1 >= 0) e (cont1 <= 10) faca
      escreval("Nota",cont1)
      leia(nota)
      soma := soma + nota
      cont1 := cont1 + 1
   fimenquanto
   media :=  soma / 10
   escreval(media)

Fimalgoritmo