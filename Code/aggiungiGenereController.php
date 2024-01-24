<?php
    // Include your database connection file here
    session_start();
    include_once("connessione.php");

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];

        // Prepare an insert statement
        $sql = "INSERT INTO Libro (nome) VALUES (?)";

        if($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $nome );

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: profilo.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
?>