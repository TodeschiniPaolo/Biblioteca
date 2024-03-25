<?php
    // Start the session
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Buonsalve <b></b> Welcome to our site.</h1>
    </div>
    <p>
        <a href="profilo.php" class="btn btn-warning">Profilo</a>
    <p>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <?php
        // Include the database connection file
        require_once "connessione.php";
        // Query to fetch all records from the "libro" table
        $sql = "SELECT * FROM Libro";
        $result = mysqli_query($conn, $sql);

        // Check if any records exist
        if (mysqli_num_rows($result) > 0) {
            // Output the records in squares
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div style='width: 200px; height: 200px; border: 1px solid black; display: inline-block; margin: 10px; padding: 10px;'>";
                echo "<a href='libro.php?isbn=" . $row["isbn"] . "' style='text-decoration: none; color: black;'>";
                echo "<h3>" . $row["titolo"] . "</h3>";
                echo "<p>" . $row["cfAutore"] . "</p>";
                echo "</a>";
                echo "</div>";
            }
        } else {
            echo "No records found.";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
</body>
</html>