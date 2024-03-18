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
            <?php
            include_once("connessione.php");
            // Assuming you have a database connection established
            // Replace 'your_table_name' with the actual table name
            $query = "SELECT name FROM autore";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<select name="cfautore" placeholder="autore" required>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                }
                echo '</select>';
            } else {
                echo 'No names found in the table.';
            }
            ?><br>
            <label>anno di publicazione:</label>
            <input type="text" name="anno_publicazione" placeholder="anno_publicazone" required><br>
            <label>genere:</label>
            <?php
            // Assuming you have a database connection established
            // Replace 'your_table_name' with the actual table name
            $query = "SELECT nome FROM genere";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<select name="genere" placeholder="genere" required>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['nome'] . '">' . $row['nome'] . '</option>';
                }
                echo '</select>';
            } else {
                echo 'No genres found in the table.';
            }?><br>
            <label>casa editrice:</label>
            <?php
            // Assuming you have a database connection established
            // Replace 'your_table_name' with the actual table name
            $query = "SELECT nome FROM casaeditrice";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                echo '<select name="casaeditrice" placeholder="casaeditrice" required>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['nome'] . '">' . $row['nome'] . '</option>';
                }
                echo '</select>';
            } else {
                echo 'No casaeditrice found in the table.';
            }?><br>
            <label>anno di publicazione:</label>
            <input type="text" name="anno_publicazione" placeholder="anno_publicazone" required><br>
            <input type="submit" value="aggiungi">
            <p>
        <a href="profilo.php" class="btn btn-danger">back</a>
    </p>
        </form>
    </body>
</html>