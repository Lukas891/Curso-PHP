Algoritmo "Exercicio-38"

// 38) Faça um algoritmo para ler um número que é um código de usuário. Caso este código seja
// diferente de um código armazenado internamente no algoritmo (igual a 1234) deve ser apresentada a
// mensagem ‘Usuário inválido!’. Caso o Código seja correto, deve ser lido outro valor que é a senha. Se
// esta senha estiver incorreta (a certa é 9999) deve ser mostrada a mensagem ‘senha incorreta’. Caso a
// senha esteja correta, deve ser mostrada a mensagem ‘Acesso permitido’..

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