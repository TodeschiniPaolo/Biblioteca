<?php
    // Include your database connection file here
    session_start();
    include_once("connessione.php");

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $cf = $_POST['cf'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Set verified to true
        $verified = 1;

        // Check if password and confirm password are the same
        if($password != $confirm_password) {
            echo "Passwords do not match.";
            exit();
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare an insert statement
        $sql = "INSERT INTO Utente (cf, name, surname, email, password, verified) VALUES (?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $cf, $name, $surname, $email, $hashed_password, $verified);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
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