<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "root";
    $dbname = "Management_ExpensesDB";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    if (!$conn) {
        echo "Erro de conexão: " . mysqli_connect_error();
    }else{
        echo "<h1>Bem vindo!<h1>";
    }


