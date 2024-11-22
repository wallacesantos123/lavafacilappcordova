<?php
    $user = 'root';
    $pass = '';
    $host = 'localhost';
    $db = 'lava_facil';

    $con = mysqli_connect($host, $user, $pass) or die('1 - Erro ao tentar se conectar-se ao banco de dados!');
    mysqli_select_db($con, $db) or die('2 - Erro ao tentar selecionar o banco de dados' . mysqli_error($con)); 
?>