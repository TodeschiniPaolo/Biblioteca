<?php
// Avvia una nuova sessione o riprende una sessione esistente
session_start();

// Distrugge tutte le informazioni registrate di una sessione
session_destroy();

// Reindirizza l'utente alla pagina di login
header('Location: login.php');
exit;
?>