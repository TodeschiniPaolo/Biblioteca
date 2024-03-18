<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
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
        <h2>Register</h2>
        <form method="post" action="registerController.php" enctype="multipart/form-data">
            <label>CF:</label>
            <input type="text" name="cf" placeholder="cf" required><br>
            <label>Name:</label>
            <input type="text" name="name" placeholder="name" required><br>
            <label>Surname:</label>
            <input type="text" name="surname" placeholder="surname" required><br>
            <label>Email:</label>
            <input type="email" name="email" placeholder="email" required><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password" required><br>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" placeholder="Confirm your password" required><br>
            <input type="hidden" name="verified" value="false">
            <input type="submit" value="Register">
        </form>
    </body>
</html>