CREATE TABLE Utente (
    cf VARCHAR(16) PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(128),
    verified BOOLEAN DEFAULT FALSE
);

CREATE TABLE CasaEditrice (
    nome VARCHAR(50) PRIMARY KEY
);

CREATE TABLE Genere (
    nome VARCHAR(50) PRIMARY KEY
);

CREATE TABLE Autore (
    cf VARCHAR(50) PRIMARY KEY,
    name VARCHAR(50),
    surname VARCHAR(50),
    dataDiNascita DATE
);

CREATE TABLE Libro (
    isbn VARCHAR(100) PRIMARY KEY,
    titolo VARCHAR(50),
    annoPubblicazione INTEGER,
    nomeGenere VARCHAR(50),
    nomeCasaEditrice VARCHAR(50),
    cfAutore VARCHAR(16),
    FOREIGN KEY (nomeGenere) REFERENCES Genere(nome),
    FOREIGN KEY (nomeCasaEditrice) REFERENCES CasaEditrice(nome),
    FOREIGN KEY (cfAutore) REFERENCES Autore(cf)
);

CREATE TABLE Copia (
    idCopia INTEGER PRIMARY KEY AUTOINCREMENT,
    isbnLibro VARCHAR(50),
    stato VARCHAR(50),
    FOREIGN KEY (isbnLibro) REFERENCES Libro(isbn)
);

CREATE TABLE Prenota (
    idPrenotazione INTEGER PRIMARY KEY AUTOINCREMENT,
    dataPrenotazioneUscita DATE,
    dataPrenotazioneRientro DATE,
    cfUtente VARCHAR(16),
    idCopia INTEGER,
    FOREIGN KEY (cfUtente) REFERENCES Utente(cf),
    FOREIGN KEY (idCopia) REFERENCES Copia(idCopia)
);