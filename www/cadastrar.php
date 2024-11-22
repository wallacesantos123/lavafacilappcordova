<?php
    include "conexao.php";

    $email = $_POST["email"];
    $cel = $_POST["cel"];
    $senha = $_POST["pass"];

    $query_select = "SELECT * FROM usuarios WHERE email = '$email'";
    $query_result = mysqli_query($con, $query_select);
    $num_rowns = mysqli_num_rows($query_result);

    if($num_rowns > 0) {
        header('location:cadastro.php?email=cadastrado');
    }

    $query_select = "SELECT * FROM usuarios WHERE celular = '$cel'";
    $query_result = mysqli_query($con, $query_select);
    $num_rowns = mysqli_num_rows($query_result);

    if($num_rowns > 0) {
        header('location:cadastro.php?celular=cadastrado');
    }

    if($num_rowns == 0) {
        $query_insert = "INSERT INTO usuarios (email, senha, celular) VALUES ('$email', '$cel', '$senha')";
        $query_result = mysqli_query($con, $query_insert);
        
        print('
            <html>
                <head>
                    <meta charset="utf-8">
                    <meta name="format-detection" content="telephone=no">
                    <meta name="msapplication-tap-highlight" content="no">
                    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
                    <link rel="stylesheet" href="css/cadastro.css">
                    <title>LavaFacilApp</title>
                </head>
                <body>
                    <div id="container">
                        <h2>CADASTRO CONCLUIDO COM SUCESSO!!!, ENVIAMOS UM EMAIL DE CONFIRMAÇÃO PARA SUA CAIXA DE MENSAGENS.<h2>
                        <a href="index.html">Voltar para o inicio.</a>
                    </div>
                </body>
            </html>
        ' );
    } 
?>