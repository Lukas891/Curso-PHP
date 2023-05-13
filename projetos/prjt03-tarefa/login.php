<?php 
include('validar-login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
        h2 {
           text-align: center; 
        }
        h5 {
            text-align: center;
            color: red;
        }
    </style>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6"> 
                <h2>Faça o Login
                    <h5><?php echo $acesso;?></h5>
                </h2>
                <form action="login.php" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu E-mail" name="email">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="criar-conta.php" class="btn btn-success">Criar conta</a>
                </form>
            </div>        
        </div>
    </div>
</body>

</html>