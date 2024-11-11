<?php
    $host = "lavafacilapp.ddns.net";
    $user = "root";
    $pass = "";
    $db = "lavafacil";
	
	$con = mysqli_connect($host, $user, $pass) or 
            die("1 - erro ao tentar se conectar-se ao banco de dados");
					mysqli_select_db($con, $db) or 
						die("2 - erro ao tentar selecionar o banco de dados");
?>