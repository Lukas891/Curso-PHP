Algoritmo "Exercicio-38"

// 38) Fa�a um algoritmo para ler um n�mero que � um c�digo de usu�rio. Caso este c�digo seja
// diferente de um c�digo armazenado internamente no algoritmo (igual a 1234) deve ser apresentada a
// mensagem �Usu�rio inv�lido!�. Caso o C�digo seja correto, deve ser lido outro valor que � a senha. Se
// esta senha estiver incorreta (a certa � 9999) deve ser mostrada a mensagem �senha incorreta�. Caso a
// senha esteja correta, deve ser mostrada a mensagem �Acesso permitido�..

Var

   Usuario, Senha: inteiro

Inicio

   escreval("Digite o usuario")
   leia(Usuario)
   se (Usuario <> 1234) entao
      escreval("Usuario Invalido!")
   senao
      se (Usuario = 1234) entao
         escreval("Digite a senha:")
         leia(Senha)
         se (Senha <> 9999) entao
            escreval("Senha Invalida!")
         senao
            se (Senha = 9999) entao
               escreval("Acesso permitido!")
            fimse
         fimse
      fimse
   fimse

Fimalgoritmo