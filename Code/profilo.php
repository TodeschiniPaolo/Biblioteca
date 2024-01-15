<?php
// FILEPATH: /workspaces/Biblioteca/Code/profilo.php
session_start();
// Assuming you have already established a database connection
include_once("connessione.php");

// Query to retrieve information from the "Utente" table
$sql = "SELECT * FROM Utente WHERE cf = '{$_SESSION['cf']}'";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<p>CF: " . $row["cf"] . "</p>";
        echo "<p>Name: " . $row["name"] . "</p>";
        echo "<p>Surname: " . $row["surname"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        // Add more fields as needed
        echo "<br>";
    }
} else {
    echo "<p>No records found</p>";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <script>
        function setAdmin() {
            // Send an AJAX request to update the admin value
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "update_admin.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response here if needed
                }
            };
            xhr.send("admin=true");
        }
        /*function controlla() {
            // Send an AJAX request to check if the user is an admin
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "check_admin.php", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var isAdmin = xhr.responseText;
                    if (isAdmin === "true") {
                        // Redirect to aggiungiLibro.php
                        window.location.href = "aggiungiLibro.php";
                    } else {
                        // Display error message
                        alert("You are not an admin.");
                    }
                }
            };
            xhr.send();
        }*/
    </script>
</head>
<body>
    <h1>User Profile</h1>
    <?php
    // Add a link to go back to home.php
    echo '<div class="back-link"><a href="home.php">Go back to Home</a></div>';
    echo '<div class="back-link"><button onclick="setAdmin()">admin</button></div>';
    //echo '<div class="back-link"><button //onclick="controlla()"//>aggiungi libro</button></div>';
    echo '<div class="back-link"><a href="aggiungiLibro.php">aggiungi libro</a></div>';
    ?>
</body>
</html>
