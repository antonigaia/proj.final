<?php
    $servername = "localhost";
    $username = "gaia";
    $password = "";
    $dbname = "proj_final";
    // Cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Verifica a conexão
    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
    echo "Conectado com sucesso";
 ?>