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
        <h2>Aggiungi copia</h2>
        <form method="post" action="aggiungiCopiaController.php" enctype="multipart/form-data">
        <label>isbn:</label>
        <?php
            include_once("connessione.php");
            // Assuming you have a database connection established
            // Replace 'your_table_name' with the actual table name
            $query = "SELECT isbn FROM Libro";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<select name="isbnLibro" placeholder="isbn" required>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['isbn'] . '">' . $row['isbn'] . '</option>';
                }
                echo '</select>';
            } else {
                echo 'No names found in the table.';
            }
            ?><br>
            <input type="submit" value="aggiungi">
            <p>
        <a href="profilo.php" class="btn btn-danger">back</a>
    </p>
        </form>
    </body>
</html>