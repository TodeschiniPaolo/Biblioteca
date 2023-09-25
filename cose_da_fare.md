PROBLEMA:
  permettere ai lettori con scarse disponibilità economiche di permettersi una lettura a scopo ricreativo o di ricerca

DESCRIZIONE:
  una web app che permette la gestione di una biblioteca virtuale

FUNZIONALITA:
  -prenotare uno o più libri
  -controllare eventuali le prenotazioni gia in atto
  -controllare la disponibilità di un dato libro
  -aggiungere al catalogo un nuovo libro
  -login versione abbonato, versione admin(bibliotecario)
  -allarme all'account abbonato di scadenza imminente o già avvenuta di una prenotazione
biblioteca:
    attributi:
    relazioni:
      possiede i libri
      presta i libi agli abbonati

libro:
  attributi:
    isbn
    titolo
    autore
    anno
    genere
    disponibilità

  relazioni:
    scritto da autore
    è posseduto dalla biblioteca
autore:
    attributi:
      id
      nome
      cognome
      nascita
    relazioni:
      scrive il libro
