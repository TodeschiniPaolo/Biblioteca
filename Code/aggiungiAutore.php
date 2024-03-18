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
        <h2>Aggiungi autore</h2>
        <form method="post" action="aggiungiAutoreController.php" enctype="multipart/form-data">
            <label>cf:</label>
            <input type="text" name="cf" placeholder="cf" required><br>
            <label>nome:</label>
            <input type="text" name="name" placeholder="nome" required><br>
            <label>cognome:</label>
            <input type="text" name="surname" placeholder="cognome" required><br>
            <label>data di nascita:</label>
            <input type="date" name="dataDiNascita" placeholder="dataDiNascita" required><br>
            <input type="submit" value="aggiungi">
            <p>
        <a href="profilo.php" class="btn btn-danger">back</a>
    </p>
        </form>
    </body>
</html>