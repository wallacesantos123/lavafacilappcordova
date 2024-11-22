<?php
    include "conexao.php";

    $email = $_POST["email"];
    $pass = $_POST["senha"];

    $query_select = "SELECT * FROM usuarios WHERE email = '$email'";
    $query_result = mysqli_query($con, $query_select);
    $num_rowns = mysqli_num_rows($query_result);

    if($num_rowns == 0) {
        header("location: login.php?login=falhou");
    }
?>