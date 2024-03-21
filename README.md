#PROBLEMA:
  permettere ai lettori con scarse disponibilità economiche di permettersi una lettura a scopo ricreativo o di ricerca
------------------------------------------------------------------------------------------------------------------------------
#DESCRIZIONE:
  una web app che permette la gestione di una biblioteca virtuale
------------------------------------------------------------------------------------------------------------------------------
#FUNZIONALITA:
  * accedere(admin o utente);
  * controllare i paramentri di un libro;
  * controllare il catalogo della libreria;
  * utente:
    * prenotare uno o più libri;
    * controllare i libri gia in prestito (personali);
    * avviso scadenza prestiti;
    * modificare il proprio profilo;
  * admin (bibliotecario):
    * aggiungere uno o più libri;
    * controlla scadenze prestiti;
    * modificare paramentri e disponibilita dei libri;
    * accettare utenti;
    * rifiutare utenti;
    * cancelllare utente;
------------------------------------------------------------------------------------------------------------------------------
#ENTITA:
*****************************************
* utente:
  * attributi:
    * (PK)CF;
    * nome;
    * cognome;
    * password;
  * relazioni:
    * ISA admin;
    * prenota uno o più libri;
    * è controllato da admin
*****************************************
* copia:
  * attributi:
    * id; 
  * relazioni:
    * viene prenotata da uno o piu utenti;
    * ogni libro ha una o piu copie
*****************************************
* libro:
  * attributi:
    * (PK)isbn;
    * titolo
    * autore
    * anno_publicazione
    * genere
    * immagine
  * relazioni:
    * è scritto da uno o più autori;
    * è descritto da uno o più generi;
    * è publicato da una casa editrice;
    * ogni libro ha una o piu copie
***************************************** 
* autore:
    * attributi:
      * (PK)CF;
      * nome;
      * cognome;
      * nascita;
    * relazioni:
      * scrive il libro;
*****************************************
* genere:
  * attributi:
    * (PK) nome;
  * relazioni:
    * descrive uno o più libri;
*****************************************
* casa_editrice:
  * attributi:
    * (PK) nome;
  * relazioni:
    * publica uno o più libri;
*****************************************

#DIAGRAMMA ER:
![ab89c589-e154-4f88-99ff-10b2bc845639](https://github.com/TodeschiniPaolo/Biblioteca/assets/101709345/53ba057b-b840-45a1-ac5e-009b0c4bc542)


------------------------------------------------------------------------------------------------------------------------------
#DIAGRAMMA RELAZIONALE:
* Tenant(<ins> idTenant </ins>, nome);
* utente(<ins> CF, tenant_id </ins>, nome, cognome, password);
* libro(<ins> isbn, genere_id, CasaEditrie_id, autore_cf, tenant_id </ins>, titolo, autore, anno_pubblicazione, genere, immagine_libro);
* autore(<ins> CF tentant_id </ins>, nome, cognome, nascita);
* copia(<ins> idCopia, Libro_isbn, tenant_id </ins>, );
*  genere(<ins> idGenere, tenant_id </ins>, nome);
*  casa_edtrice(<ins> idCasaEditrice, tenant_id </ins>, nome);
*  prenota(<ins> idPrenotazione, utente_CF, copia_id, tenant_id</ins>, dataPrenotazioneUscita, dataPrenotazioneRientro);
*  scrive(<ins> autore_CF, libro_isbn</ins>);
*  descrive(<ins> genere_nome, libro_isbn</ins>;
*  publica(<ins> casa_editrice_nome, libro_isbn</ins>);

------------------------------------------------------------------------------------------------------------------------------
#MOCKUP:

![Screenshot 2023-10-30 132416](https://github.com/TodeschiniPaolo/Biblioteca/assets/101709345/400dfd53-4ce0-4ac1-a325-e89d0093672e)
![Screenshot 2023-10-30 132433](https://github.com/TodeschiniPaolo/Biblioteca/assets/101709345/476ba53f-25dd-4190-9f43-da95fa0f5eb2)
---
#DDL
CREATE DATABASE Biblioteca

CREATE TABLE Utente(
  CF char(16),
  Nome char(20),
  Cognome char(20),
  Password char(255),
  UNIQUE(Nome, Cognome, Password),
  PRIMARY KEY (CF)
);

CREATE TABLE Copia(
  Id char(255) PRIMARY KEY
);

CREATE TABLE Libro(
  Isbn char()
  Titolo char(50),
  Autore char(40),
  Anno_publicazione integer,
  Genere char(20),
  Immagine 
);

CREATE TABLE Autore(
  CF char(16),
  nome char(20),,
  cognome char(20),
  nascita 
