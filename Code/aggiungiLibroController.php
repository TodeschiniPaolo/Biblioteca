<?php
    // Include your database connection file here
    session_start();
    include_once("connessione.php");

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $isbn = $_POST['isbn'];
        $titolo = $_POST['titolo'];
        $autore = $_POST['autore'];
        $anno_publicazione = $_POST['anno_publicazione'];
        $genere = $_POST['genere'];
        $casa_editrice = $_POST['casa_editrice'];

        // Prepare an insert statement
        $sql = "INSERT INTO Libro (isbn, titolo, annoPubblicazione, nomeGenere, nomeCasaEditrice, cfAutore) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $isbn, $titolo, $anno_publiczione, $genere, $casa_editice, $autore);

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