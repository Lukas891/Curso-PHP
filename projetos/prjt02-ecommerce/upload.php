<?php 
$pasta = "arquivos/"; // onde os arquivos serão salvos
$arquivo = $pasta.basename($_FILES["fileToUpload"]["name"]); 
// echo $arquivo;
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
$msgUpload = "";

if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false){
        // echo "É uma imagem o arquivo ".$arquivo
    }else{
        $msgUpload .= "Não é uma imagem!<br>";
        $uploadOk = 0;
    }

    // testando se o arquivo já existe na pasta
    if(file_exists($arquivo)){
        $msgUpload .= "O arquivo já existe! Tente renomear ou enviar outro arquivo.<br>";
        $uploadOk = 0;
    }

    // verificando o tamanho do arquivo
    if ($_FILES["fileToUpload"]["size"] >= 500000){
        $msgUpload .= "Arquivo maior que 500KB!<br>";
        $uploadOk = 0;
    }

    // verifica o tipo de imagem permitido
    if ($tipoArquivo != "jpg" && $tipoArquivo != "jpeg" && $tipoArquivo != "png" && $tipoArquivo != "gif"){
        $msgUpload .= "Tipo de arquivo não suportado!<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0){
        $msgUpload .= "Desculpe, não será possível fazer o upload.<br>";
    }else{
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$arquivo)) {
            //echo "Ok ao fazer upload.";
        }else{
            $msgUpload .= "Desculpe, erro inesperado ao fazer upload.";
        }
    }
    $msg = $msgUpload;
}

?>