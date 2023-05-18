<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Vera, Juan Robayo y David Chavarría">
    <meta name="description" content="Página web oficial de TATES FC">
    <meta name="keywords"
        content="TATES, FUTBOL, FUTBOL7, BALON, JUGADORES, ENTRENADOR, PORTERO, TATESFC, IMF, IMF SMART EDUCATION, PROYECTO, ESTADIO, BOTAS">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/pruebasacceso.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.2.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../Imagenes/emblema.png">

    <title>TATES FC</title>
</head>

<body>

    <nav>
        <a href="inicio.php">
            <li><i class="fa-solid fa-house"></i><br>Inicio</li>
        </a>
        <a href="plantilla.php">
            <li><i class="fa-solid fa-futbol"></i><br>Plantilla</li>
        </a>
        <a href="tienda.php">
            <li><i class="fa-solid fa-shop"></i><br>Tienda TFC</li>
        </a>
        <a href="pruebasacceso.php" id="acc">
            <li><i class="fa-brands fa-wpforms"></i><br>Pruebas de acceso</li>
        </a>
    </nav>

    <header>
        <img class="foto1" src="https://madridfutbol7.es/wp-content/uploads/2022/08/Tates-FC-Madridfutbol7.jpg"
            alt="TATES FC">
        <div class="bloque1">
            <div class="caja1">
                <h1>¡VEN A PROBAR CON NOSOTROS!</h1>
            </div>
        </div>
    </header>

    <div class="flex-container">

        <form method="" action="" class="formulario">
            <label class="nombre">NOMBRE
                <input placeholder="Pon tu nombre" type="text"
                    required>
            </label>
            <br>
            <label class="apellido">APELLIDO
                <input type="text">
            </label>
            <br>
            <label>TELEFONO
                <input placeholder="Formato XXX XXX XXX" type="tel">
            </label>
            <br>
            <label>FECHA DE NACIMIENTO
                <input type="date">
            </label>
            <br>
            <label>CORREO ELECTRÓNICO
                <input type="email">
            </label>
            <br>
            <label>
                ¿CUÁL ES TU POSICIÓN FAVORITO?
                <input type="text" list="POSICIÓN">

                <datalist id="POSICIÓN">
                    <option value="POR">PORTERO</option>
                    <option value="DFC">DEFENSA</option>
                    <option value="MC">MEDIOCENTRO</option>
                    <option value="DEL">DELANTERO</option>
                </datalist>
            </label>
            <br>
            <label>
                DE NUESTROS JUGADORES ¿CUÁL ES TU JUGADOR FAVORITO?
                <br>
                <input type="text" list="jugadores" id="jugadores">

                <datalist>
                    <option value="JOSE">Jose Vera</option>
                    <option value="ALBERTO">Alberto Cañadas</option>
                    <option value="DIEGO">Diego López</option>
                    <option value="ANDRÉS">Andrés Pino</option>
                    <option value="ADRIAN">Adrian Gonzalez</option>
                    <option value="IVAN">Iván Alonso</option>
                    <option value="HUGO">Hugo Dongil</option>
                    <option value="ALEXIS">Alexis Quisilema</option>
                    <option value="SERGIO">Sergio Villafaina</option>
                    <option value="GABRIEL">Gabriel Ramírez</option>
                    <option value="ALVARO">Álvaro Cascón</option>
                    <option value="JESUS">Jesús Ramírez</option>
                    <option value="ALFREDO">Alfredo Cobo</option>
                </datalist>
            </label>
            <button type="submit" id="enviar">Enviar</button>
        </form>

    </div>
    <div id="cosas">
        
            <a href="https://www.instagram.com/tates.fc/?hl=es">
                <img class="redes"
                        src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c521.png"
                        alt="Instagram">
            </a>
            <a href="https://twitter.com/fctates">
                <img class="redes"
                        src="https://about.twitter.com/content/dam/about-twitter/en/brand-toolkit/brand-download-img-1.jpg.twimg.1920.jpg"
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

</html>