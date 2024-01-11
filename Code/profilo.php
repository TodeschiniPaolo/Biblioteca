<?php
// FILEPATH: /workspaces/Biblioteca/Code/profilo.php

// Assuming you have already established a database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "biblioteca";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve information from the "Utente" table
$sql = "SELECT * FROM Utente";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        // Add more fields as needed
        echo "<br>";
    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>
