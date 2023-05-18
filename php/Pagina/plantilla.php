<?php
require_once("../Database/Database.php");
$resultado = Database::getAllJugadores();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta name="description" content="Página web oficial de TATES FC">
    <meta name="keywords"
        content="TATES, FUTBOL, FUTBOL7, BALON, JUGADORES, ENTRENADOR, PORTERO, TATESFC, IMF, IMF SMART EDUCATION, PROYECTO, ESTADIO, BOTAS">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/plantillaa.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">
    <title>TATES FC</title>

</head>

<body>
<div class="botoncontainer">
        
    </div>
    <nav>
    

        <a href="inicio.php">
            <li><i class="fa-solid fa-house"></i><br>Inicio</li>
        </a>
        <a href="plantilla.php" id="pln">
            <li><i class="fa-solid fa-futbol"></i><br>Plantilla</li>
        </a>
        <a href="tienda.php">
            <li><i class="fa-solid fa-shop"></i><br>Tienda TFC</li>
        </a>
        <a href="pruebasacceso.php">
            <li><i class="fa-brands fa-wpforms"></i><br>Pruebas de acceso</li>
        </a>
    </nav>

    <header>
        <img class="foto1" src="../../carpeta img/plantillag.png" alt="TATES FC">
        <div class="bloque1">
            <div class="caja1">
                <h1>PLANTILLA</h1>
            </div>
        </div>
    </header>
    <div class="bloque2">
        <div class="caja2">
            <h1>PORTEROS</h1>
        </div>
    </div>
    <div class="flex-container">
        <div class="filas">
            <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../carpeta img/Alberto2.png' alt='Alberto'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Alberto"){
                echo strtoupper($row["nombre"] . " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "13"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>"
            ?>    
    <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../Imagenes/portada.png' alt='Jose'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Jose"){
                echo strtoupper($row["nombre"] .  " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "21"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            ?>    
    <div class="bloque2">
        <div class="caja2">
            <h1>DEFENSAS</h1>
        </div>
    </div>
    <div class="flex-container">
        <div class="filas">
            <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../carpeta img/Diego2.png' alt='Diego'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Diego"){
                echo strtoupper($row["nombre"] . " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "4"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>"
            ?>
            <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../carpeta img/Andres.png' alt='Andres'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Andres"){
                echo strtoupper($row["nombre"] . " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "12"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>"
            ?>
            <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../carpeta img/Adrian2.png' alt='Adrian'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Adrian"){
                echo strtoupper($row["nombre"] . " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "15"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>"
            ?>
    <?php 
              $resultado = Database::getAllJugadores();
            echo "<div class='jugadores'>";
            echo "<img src='../../carpeta img/Ivan2.png' alt='Ivan'>";
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["nombre"] == "Ivan"){
                echo strtoupper($row["nombre"] . " " . $row["apellido"]);
            }
            }
            echo "</strong></h4>";
            ?>    
            <?php 
            $resultado = Database::getAllJugadores();
            echo "<h4><strong>";
            foreach( $resultado as $row){
               if($row["dorsal"] == "18"){
                echo  "DORSAL: " . $row["dorsal"];
            }
            }
            echo "</strong></h4>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            ?>
    <div class="bloque2">
        <div class="caja2">
            <h1>MEDIOCAMPISTAS</h1>
        </div>
    </div>
    <div class="flex-container">
        <div class="filas">
            <div class="jugadores">
                <img src="../../carpeta img/Hugo.png" alt="Hugo">
                <h4><strong>HUGO DONGIL</strong></h4>
                <h4><strong>DORSAL: 6</strong></h4>
            </div>
            <div class="jugadores">
                <img src="../../carpeta img/Alexis.png" alt="Alexis">
                <h4><strong>ALEXIS QUISILEMA</strong></h4>
                <h4><strong>DORSAL: 7</strong></h4>
            </div>
            <div class="jugadores">
                <img src="../../carpeta img/Sergio2.png" alt="Sergio">
                <h4><strong>SERGIO VILLAFAINA</strong></h4>
                <h4><strong>DORSAL: 8</strong></h4>
            </div>
        </div>
        <div class="filas">
            <div class="jugadores">
                <img src="../../carpeta img/Gabriel.png" alt="Gabriel">
                <h4><strong>GABRIEL RAMÍREZ</strong></h4>
                <h4><strong>DORSAL: 11</strong></h4>
            </div>
            <div class="jugadores">
                <img src="../../carpeta img/Alvaro2.png" alt="Alvaro">
                <h4><strong>ÁLVARO CASCÓN</strong></h4>
                <h4><strong>DORSAL: 97</strong></h4>
            </div>
        </div>
    </div>
    <div class="bloque2">
        <div class="caja2">
            <h1>DELANTEROS</h1>
        </div>
    </div>
    <div class="flex-container">
        <div class="filas">
            <div class="jugadores">
                <img src="../../carpeta img/Alfredo.png" alt="Alfredo">
                <h4><strong>ALFREDO COBOS</strong></h4>
                <h4><strong>DORSAL: 9</strong></h4>
            </div>
            <div class="jugadores">
                <img src="../../carpeta img/Jesus2.png" alt="Jesus">
                <h4><strong>JESÚS RAMÍREZ</strong></h4>
                <h4><strong>DORSAL: 10</strong></h4>
            </div>
        </div>
    </div>
    <div class="bloque2">
        <div class="caja2">
            <h1>DIRECTOR TECNICO</h1>
        </div>
    </div>
    <div class="flex-container">
        <div class="filas">
            <div class="jugadores">
                <img src="../../carpeta img/Robayo.png" alt="Robayo">
                <h4><strong>JUAN ROBAYO</strong></h4>
                <h4><strong>"EL PROFE"</strong></h4>
            </div>
        </div>
    </div>
    <div id="cosas">
        
        <a href="https://www.instagram.com/tates.fc/?hl=es">
            <img class="redes"
                    src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c521.png"
                    alt="Instagram">
        </a>
        <a href="https://twitter.com/fctates">
            <img class="redes"
                    src="https://static.vecteezy.com/system/resources/previews/018/930/745/non_2x/twitter-logo-twitter-icon-transparent-free-free-png.png"
                    alt="Twitter">
        </a>
        <a href="Youtube.com">
            <img class="redes" src="https://logodownload.org/wp-content/uploads/2014/10/youtube-logo-5-2.png"
                    alt="Youtube">
        </a>
</div>
</body>
<footer>
    <div>
       <p id="ptr">PATROCINADORES</p> 
        <div class="patro">
            <img class="patrocinadores" src="http://assets.stickpng.com/thumbs/5a1c2c12f65d84088faf13b7.png"
                alt="Mercadona">
            <img class="patrocinadores"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Burger_King_logo_%281999%29.svg/2024px-Burger_King_logo_%281999%29.svg.png"
                alt="Burger King">
            <img id="foto3" class="patrocinadores" src="../../Imagenes/aguardiente.png" alt="Aguardiente Antioqueño">
        </div>
        
    </div>
    <div class="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.2809767285867!2d-3.6801488842823917!3d40.46904856037911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228eb37e45ebd%3A0x9bfa83f7479125e0!2sColegio%20Nuestra%20Se%C3%B1ora%20del%20Recuerdo!5e0!3m2!1ses!2ses!4v1680277686820!5m2!1ses!2ses"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <address><i class="fa-solid fa-location-dot"></i>Estamos en el campo de futbol El Recuerdo</address>
    </div>
</footer>

</body>
</html>