Algoritmo "Exercicio-48"

// 48) Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno,
// calcule e imprima a média (simples) desse aluno. Só devem ser aceitos
// valores válidos durante a leitura (0 a 10) para cada nota.

Var

   cont1, cont2, media, nota, qntd1, qntd2, soma1, soma2 : real

Inicio
//Notas 1a avaliacao
   escreval("Digite cada nota da 1a avaliacao:")
   escreval("Quantas notas possui a 1a avaliacao?:")
   leia(qntd1)
   cont1 := 1
   enquanto (cont1 >= 0) e (cont1 <= qntd1) faca
   repita
      escreval("Nota",cont1)
      leia(nota)
      ate (nota >= 0) e (nota <= 10)
      soma1 := soma1 + nota
      cont1 := cont1 + 1
   fimenquanto
   escreval("Nota da 1a avaliacao: ",soma1," pts")
   
// Notas 2a avaliacao
   escreval("Digite cada nota da 2a avaliacao:")
   escreval("Quantas notas possui a 2a avaliacao?:")
   leia(qntd2)
   cont2 := 1
   enquanto (cont2 >= 0) e (cont2 <= qntd2) faca
   repita
      escreval("Nota",cont2)
      leia(nota)
      ate (nota >= 0) e (nota <= 10)
      soma2 := soma2 + nota
      cont2 := cont2 + 1
   fimenquanto
   media := (soma1 + soma2)/2
   escreval("A media das duas avaliacoes e:",media,"pts")

Fimalgoritmo