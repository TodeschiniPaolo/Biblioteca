<?php
// FILEPATH: /workspaces/Biblioteca/Code/profilo.php

// Assuming you have already established a database connection
include_once("connessione.php");

// Query to retrieve information from the "Utente" table
$sql = "SELECT * FROM Utente";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "CF: " . $row["cf"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Surname: " . $row["surname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Password: " . $row["password"] . "<br>";
        // Add more fields as needed
        echo "<br>";
    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>
