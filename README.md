PROBLEMA:
  permettere ai lettori con scarse disponibilità economiche di permettersi una lettura a scopo ricreativo o di ricerca
------------------------------------------------------------------------------------------------------------------------------
DESCRIZIONE:
  una web app che permette la gestione di una biblioteca virtuale
------------------------------------------------------------------------------------------------------------------------------
FUNZIONALITA:
  -accedere(admin o utente);
  -controllare i paramentri di un libro;
  -controllare il catalogo della libreria;
  utente:
    -prenotare uno o più libri;
    -controllare i libri gia in prestito (personali);
    -avviso scadenza prestiti;
  admin (bibliotecario):
    -aggiungere uno o più libri;
    -controlla scadenze prestiti;
    -modificare paramentri e disponibilita dei libri;
    -accettare utenti;
    -rifiutare utenti;
    -cancelllare utente;
------------------------------------------------------------------------------------------------------------------------------
ENTITA:
*****************************************
utente:
  attributi:
    -(PK)CF;
    -nome;
    -cognome;
    -password;
  relazioni:
    -ISA admin;
    -prenota uno o più libri;
    -è controllato da admin
*****************************************
admin:
  attributi:
  relazioni:
    -controlla utenti;
*****************************************
libro:
  attributi:
    -(PK)isbn;
    -titolo
    -autore
    -anno_publicazione
    -genere
    -disponibilità
  relazioni:
    -scritto da uno o più autori;
    -è descritto da uno o più generi;
    -è publicato da una casa editrice;
    -è prenotato da uno o più utenti;
***************************************** 
autore:
    attributi:
      -(PK)CF;
      -nome;
      -cognome;
      -nascita;
    relazioni:
      -scrive il libro;
*****************************************
genere:
  attributi:
    -(PK) nome;
  relazioni:
    -descrive uno o più libri;
*****************************************
casa_editrice:
  attributi:
    -(PK) nome;
  relazioni:
    -publica uno o più libri;
*****************************************
------------------------------------------------------------------------------------------------------------------------------
![informatica](https://github.com/TodeschiniPaolo/Biblioteca/assets/101709345/ab89c589-e154-4f88-99ff-10b2bc845639)
------------------------------------------------------------------------------------------------------------------------------
