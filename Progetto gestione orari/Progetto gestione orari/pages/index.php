<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIONE</title>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <script src="../script/script.js"></script>
    <script>
        function Apri(){
            document.getElementById("sidebar").style.display="block";
            document.getElementById("Apri").style.display="none";
        }
        function chiudi(){
            document.getElementById("sidebar").style.display="none";
            document.getElementById("Apri").style.display="";            
        }
    </script>
</head>
<body>
<button onclick="Apri()" id="Apri"><img src="../images/hamMenu.png" alt=""></button>
    <header>
        <h1><b>I.I.S ITALO CALVINO</b></h1>
    </header>
    <div id="sidebar">
        <button onclick="chiudi()" id="butClose"><img src="../images/chiudi.png" alt=""></button>
        <button onclick="refresh()" id="butRefresh">Bini Merda</button>
        <a class="active" href="#home"><p><b>PROFESSORI</b></p></a>
        <a href="sezioni.php"><p><b>SEZIONI</b></p></a>
        <a href="gestione.php"><p><b>GESTIONE</b></p></a>
        <a href="#about"><p><b>AGGIUNGI</b></p></a>
    </div>
    
    <div id="orario">
        <div class="giorno">
            <div class="legendaOra"></div>
            <div class="legendaOra">8:00</div>
            <div class="legendaOra">9:00</div>
            <div class="legendaOra">10:00</div>
            <div class="legendaOra">11:00</div>
            <div class="legendaOra">12:00</div>
            <div class="legendaOra">13:00</div>
            <div class="legendaOra">14:00</div>
            <div class="legendaOra">15:00</div>
            <div class="legendaOra">16:00</div>
            <div class="legendaOra">17:00</div>
        </div>
        <div id="lunedi" class="giorno">
            <div class="ora">LUNEDI</div>
            <?php
                $pdo = new PDO("mysql:host=localhost; dbname=gestione_orario", "root", "");
                $query = $pdo->prepare("SELECT * FROM ora, profhaora WHERE idProf=14 AND idOra=id");
                $query->execute(); 
                $precedente=7;
                while ($riga = $query->fetch()) {
                    if($riga[3]=="lunedi"){
                        if($riga[4]-$precedente==1 || $precedente==null){
                            echo "<div class='ora'>".$riga[5]."</div>";
                        }
                        else{
                            for($i=0;$i<$riga[4]-$precedente-1;$i++){
                                echo "<div class='ora'></div>";
                            }
                            echo "<div class='ora'>".$riga[5]."</div>";
                        }
                        $precedente=$riga[4];
                    }
                    
                }

                $pdo = null; // chiudo la connessione
            ?>
        </div>
        <div id="martedi" class="giorno">
            <div class="ora">MARTEDI</div>
            <?php
                $pdo = new PDO("mysql:host=localhost; dbname=gestione_orario", "root", "");
                $query = $pdo->prepare("SELECT * FROM ora, profhaora WHERE idProf=14 AND idOra=id");
                $query->execute(); 
                $precedente=7;
                while ($riga = $query->fetch()) {
                    if($riga[3]=="lunedi"){
                        echo "<div class='ora'>".$riga[5]."  ".$riga[4]."</div>";
                    }
                    
                }

                $pdo = null; // chiudo la connessione
            ?>
        </div>
        <div id="mercoledi" class="giorno">
            <div class="ora">MERCOLEDI</div>
            <?php
            
            ?>
        </div>
        <div id="giovedi" class="giorno">
            <div class="ora">GIOVEDI</div>
            <?php
            
            ?>
        </div>
        <div id="venerdi" class="giorno">
            <div class="ora">VENERDI</div>
            <?php
            
            ?>
        </div>
    </div>
</body>
</html>