<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                text-align: center;
                margin: 150px;
            }
            form {
                display: inline-block;
                text-align: left;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>Login</h2>
        <form method="post" action="loginController.php">
            <label>Email:</label>
            <input type="email" name="email" required value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>"><br>
            <label>Password:</label>
            <input type="password" name="password" required><br>
            <?php

                if (isset($_GET['error'])) {
                    $errorCode = $_GET['error'];
                    $errorMessage = isset($errorCodes[$errorCode]) ? $errorCodes[$errorCode] : 'Unknown Error';
                    echo "<p class='error'>$errorMessage</p>";
                }
            ?>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </body>
</html>