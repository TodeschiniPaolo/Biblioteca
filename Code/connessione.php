<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "biblioteca";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
    echo("Connessione fallita: ".$connessione->connect_error.".");
    exit();
    }
?>