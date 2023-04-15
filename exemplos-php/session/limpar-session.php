<?php

session_start();
//inicia a sessao(onde salva as credenciais para utilizar nas paginas)

session_unset();
// remove todas as variaveis da sessao

session_destroy();
// destroi a sessao


?>