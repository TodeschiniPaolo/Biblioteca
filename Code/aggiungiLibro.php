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
        <h2>Aggiungi Libro</h2>
        <form method="post" action="aggiungiLibroController.php" enctype="multipart/form-data">
            <label>isbn:</label>
            <input type="text" name="isbn" placeholder="isbn" required><br>
            <label>titolo:</label>
            <input type="text" name="titolo" placeholder="titolo" required><br>
            <label>cf autore:</label>
            <input type="text" name="cfautore" placeholder="cf autore" required><br>
            <label>anno di publicazione:</label>
            <input type="text" name="anno_publicazione" placeholder="anno_publicazone" required><br>
            <label>genere:</label>
            <input type="text" name="genere" placeholder="genere" required><br>
            <label>casa editice:</label>
            <input type="text" name="casa_editrice" placeholder="casa_editice" required><br>
            <input type="submit" value="aggiungi">
        </form>
    </body>
</html>