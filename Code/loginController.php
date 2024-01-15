<?php
    // Start the session and include your database connection file
    session_start();
    $username = 'nome_utente';

// Salva il nome utente nella variabile di sessione
    $_SESSION['cf'] = $cf;
    include_once("connessione.php");

    // Check if form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare a select statement
        $sql = "SELECT cf, name, surname, email, password, verified FROM Utente WHERE email = ?";

        if($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1) {                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $cf, $name, $surname, $email, $hashed_password, $verified);
                    if(mysqli_stmt_fetch($stmt)) {
                        if(password_verify($password, $hashed_password)) {
                            // Password is correct, so store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["cf"] = $cf;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to home page
                            header("location: home.php");
                        } else {
                            // Display an error message if password is not valid
                            echo "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if email doesn't exist
                    echo "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
?>