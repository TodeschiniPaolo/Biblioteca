<?php
// Check if the "isbn" parameter is provided
if (isset($_GET['isbn'])) {
    // Get the ISBN value from the parameter
    $isbn = $_GET['isbn'];
    require_once "connessione.php";
 
    // Prepare and execute the SQL query
    $sql = "SELECT * FROM Libro WHERE isbn = '$isbn'";
    $result = $conn->query($sql);
    // Check if the query was successful
    if ($result) {
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Fetch the data from the result set
            while ($row = $result->fetch_assoc()) {
                // Access the values of each column
                $isbn = $row['isbn'];
                $titolo = $row['titolo'];
                $annoPubblicazione = $row['annoPubblicazione'];
                $nomeGenere = $row['nomeGenere'];
                $nomeCasaEditrice = $row['nomeCasaEditrice'];
                $cfAutore = $row['cfAutore'];

                // Display the attributes
                echo "ISBN: " . $isbn . "<br>";
                echo "Titolo: " . $titolo . "<br>";
                echo "Anno di pubblicazione: " . $annoPubblicazione . "<br>";
                echo "Nome genere: " . $nomeGenere . "<br>";
                echo "Nome casa editrice: " . $nomeCasaEditrice . "<br>";
                echo "Codice fiscale autore: " . $cfAutore . "<br>";
              
            }
        } else {
            echo "No results found.";
        }
    } else {
        echo "Query failed: " . $conn->error;
    }
    

    // Close the database connection
    $conn->close();
} else {
    echo "ISBN parameter is missing.";
}
?>

<a href="prenota.php">prenota <?php echo $titolo?></a>
<a href="home.php">home</a>