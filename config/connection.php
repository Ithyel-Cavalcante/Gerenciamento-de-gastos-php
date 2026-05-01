<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "root";
    $dbname = "Management_ExpensesDB";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);


    if (!$conn) {
        echo "Erro de conexão: " . mysqli_connect_error();
    }else{
        echo "Banco de dados connectado com sucesso";
    }


