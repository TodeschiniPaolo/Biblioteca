<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>genere</title>
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
        <h2>Aggiungi genere</h2>
        <form method="post" action="aggiungiGenereController.php" enctype="multipart/form-data">
            <label>genere:</label>
            <input type="text" name="nome" placeholder="nome" required><br>
            <input type="submit" value="aggiungi">
            <p>
        <a href="profilo.php" class="btn btn-danger">back</a>
    </p>
        </form>
    </body>
</html>