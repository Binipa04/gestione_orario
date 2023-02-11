<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stileIndex.css">
</head>
<body>
<div class="grid-container">
  <div id="header">
    <h2>Orario</h2>
    <img class="icon" src="images/account.png">
  </div>
  
  <div id="sidebar">
    <button id="">professori</button>
    <button id="">classi</button> <!--Questi bottoni verranno collegati al database e a seconda del bottone premuto saranno visibili la lista di professori o la lista delle classi. Saranno visibili nel "contenitore-1" -->
  </div>

  <div id="contenitore-1"> <!-- Per ogni nome e classe si dovranno creare dei pulsanti così che nel contenitore a fianco sia visibile la tabella dell'orario settimanale -->
    
  <?php

    try{
      // DA METTERE IN HTDOCS SE NO NON VA
      // IN XAMPP DEVI AVVIARE MYSQL 
      
      // pdo è l'oggetto che rappresenta il database, è il mezzo con cui comunichi
      $pdo = new PDO("mysql:host=localhost; dbname=gestione_orario", "root", "");
      
      // prepariamo la query, diciamo al pdo di prepararne una 
      $query = $pdo->prepare("SELECT nome, cognome FROM prof");
      $query->execute(); 
      
      while ($riga = $query->fetch()) {
          echo "<div id='element'>".$riga[0]." ".$riga[1]."</div>";
      }
  
      $pdo = null; // chiudo la connessione
    }
    catch (PDOException $e){
        echo "Impossibile connettersi al server di database. ".$e;
        exit();
    }

    ?>
  </div>

  <div id="contenitore-2"> <!-- Qui sarà presente la tabella con l'orario i dettagli sono ancora da definire, le idee sono segnate su un altro documento  -->
  </div>

  <div id="azioni"> <!-- zona pensamento che servirà in un secondo momento -->
  </div>
  
  <div id="footer"> <!-- footer, potrebbe essere utile come no, da decidere successivamente -->
  </div>
</div>
</body>
</html>