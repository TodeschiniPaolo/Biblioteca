<?php
    if(isset($_REQUEST['tabella'])){
    $tabella = $connessione->real_escape_string($_REQUEST['tabella']);
    if(isset($_REQUEST['id'])){
        $id = $connessione->real_escape_string($_REQUEST['id']);
        $query = "SELECT * FROM ".$tabella." WHERE id = ".$id;
    }else{
        $query = "SELECT * FROM ".$tabella;
    }
    $risultato = $connessione->query($query);
    if ($risultato) {
        header('Content-Type: application/json');
        echo json_encode($risultato->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);    
    } else {
        echo "Errore nella query: " . $connessione->error;
    }
}else{
echo("
<!DOCTYPE html>
<html>
    <head>
        <title>Api</title>
    </head>
    <body>
        <div>
            <h1>Api</h1>
            <form action='Biblioteca' method='post'>
                <label for='nickname'>nickname:</label><br>
                <input type='text' id='nickname' name='nickname'><br>
                <label for='password'>Password:</label><br>
                <input type='password' id='password' name='password'><br>
                <input type='submit' value='Submit'>
            </form>
            <h2><a href='/Biblioteca/api/verifica/'>verifica</a></h2>
        </div>
        <hr>
        <div style='padding-left: 20px; padding-top:10px;'>
            <h2><a href='/Biblioteca/api/Utente'>Utente</a></h2>
            <h2><a href='/Biblioteca/api/CasaEditrice'>casa editrice</a></h2>
            <h2><a href='/Biblioteca/api/Genere'>genere</a></h2>
            <h2><a href='/Biblioteca/api/Autore'>Autore</a></h2>
            <h2><a href='/Biblioteca/api/Libro'>Libro</a></h2>
            <h2><a href='/Biblioteca/api/Copia'>Copia</a></h2>
            <h2><a href='/Biblioteca/api/Prenota'>Prenota</a></h2>
            <h2><a href='/Biblioteca/index'>Home</a></h2>
        </div>
    </body>
</html>");
}
?>