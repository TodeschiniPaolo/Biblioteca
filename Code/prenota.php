<?php

session_start();
// Assuming you have already established a database connection
include_once("connessione.php");

// Query to retrieve information from the "Utente" tabl
$result = $conn->query($sql);


?>