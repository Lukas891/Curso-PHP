Algoritmo "Exercicio-49"

// 49) Acrescente uma mensagem 'NOVO CÁLCULO (S/N)?' ao final
// do exercício [48]. Se for respondido 'S' deve retornar e executar
// um novo cálculo, caso contrário deverá encerrar o algoritmo.
Var

   cont1, cont2, media, nota, qntd1, qntd2, soma1, soma2 : real
   S, N, operacao : caracter

Inicio

   enquanto (operacao <> "N") faca
      //Notas 1a avaliacao
      escreval("Digite cada nota da 1a avaliacao:")
      escreval("Quantas notas possui a 1a avaliacao?:")
      leia(qntd1)
      cont1 := 1
      enquanto (cont1 >= 0) e (cont1 <= qntd1) faca
         escreval("Nota",cont1)
         leia(nota)
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
         escreval("Nota",cont2)
         leia(nota)
         soma2 := soma2 + nota
         cont2 := cont2 + 1
      fimenquanto
      media := (soma1 + soma2)/2
      escreval("A media das duas avaliacoes e:",media,"pts")

      escreval("NOVO CALCULO?")
      escreval("Digite 'S' para executar um novo calculo")
      escreval("Digite 'N' para terminar o programa")
      leia(operacao)
      escolha operacao
      caso "S"
         limpatela
      fimescolha
   fimenquanto

Fimalgoritmo