Algoritmo "Exercicio-78"

// 78) Escreva um algoritmo que permita a leitura dos nomes de 10 pessoas e armaze os nomes lidos em
// um vetor. Após isto, o algoritmo deve permitir a leitura de mais 1 nome qualquer de pessoa e depois
// escrever a mensagem ACHEI, se o nome estiver entre os 10 nomes lidos anteriormente (guardados no
// vetor), ou NÃO ACHEI caso contrário.

Var

   Nomes : vetor [1..10] de caractere
   Nome, m : caractere
   i : inteiro

Inicio

   para i de 1 ate 10 faca
      escreval("Digite o nome:")
      leia(Nomes[i])
   fimpara

   escreval("Digite o nome desejado: ")
   leia(Nome)

   para i de 1 ate 10 faca
      se (Nome = Nomes[i]) entao
      m := "Nome encontrado"
      interrompa
      senao
      m := "Nome nao encontrado"
      fimse
   fimpara
      escreval(m)
      
Fimalgoritmo
