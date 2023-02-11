<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIONE</title>
    <link rel="stylesheet" href="../style/stileSezioni.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
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
        <a href="index.php"><p><b>PROFESSORI</b></p></a>
        <a href="sezioni.php"><p><b>SEZIONI</b></p></a>
        <a  class="active" href="gestione.php"><p><b>GESTIONE</b></p></a>
        <a href="#about"><p><b>AGGIUNGI</b></p></a>
    </div>
    <div id="menu">
            <div id="child1">
                <h2>GESTIONE (?)</h2>
                <div id="barraRicerca">
                    <input type="text" placeholder="Cerca Sezione" id="ricerca"><button id="invia">INVIA</button>
                </div>
                <div id="listaProf">
                    <!--  -->
                    <ul>
                        <li>5BII</li>
                        <li>4BII</li>
                        <li>LA MONDO HA ROTTO</li>
                        <li>Lucia Beccaro</li>
                        <li>NON HO VOGLIA</li>
                        <li>OK</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                        <li> jsdjskakjda</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                        <li> jsdjskakjda</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                        <li>Lucia Beccaro</li>
                        <li>fksjfsal</li>
                    </ul>

                </div>
            </div>
            <div id="child2">
                <h2>ORARIO</h2>
                <div id="orarioProf">
                    <h3 class="rows-0">Ora</h3>
                    <h3>Lunedì</h3>
                    <h3>Martedì</h3>
                    <h3>Mercoledì</h3>
                    <h3>Giovedì</h3>
                    <h3>Venerdì</h3>
                    <h3  class="rows-1" >8:00</h3>
                    <h3  class="rows-2">9:00</h3>
                    <h3  class="rows-3">10:00</h3>
                    <h3  class="rows-4">11:00</h3>
                    <h3  class="rows-5">12:00</h3>
                    <h3  class="rows-6">13:00</h3>
                    <h3  class="rows-7">14:00</h3>
                    <h3  class="rows-8">15:00</h3>
                    <h3  class="rows-9">16:00</h3>
                </div>
            </div>
    </div>
</body>
</html>