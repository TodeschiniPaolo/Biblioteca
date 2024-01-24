DOCTYPE html>
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
        <h2>Aggiungi casa editrice</h2>
        <form method="post" action="aggiungiCasaEditriceController.php" enctype="multipart/form-data">
            <label>cf:</label>
            <input type="text" name="nome" placeholder="nome" required><br>
            <input type="submit" value="aggiungi">
        </form>
    </body>
</html>