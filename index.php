<?php
//PHP CON HTML CURSO
echo "<br>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta página muestra información sobre los jardínes verticales"/>
    <title>Jardín Vertical</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul class=main-nav>
                <li class=main-nav__item><a href="http://localhost/JardinVertical/">Inicio</a></li>
                <li class=main-nav__item><a href="http://localhost/JardinVertical/Videos">Videos</a></li>
                <li class=main-nav__item><a href="http://localhost/JardinVertical/Proyectos">Proyectos</a></li>
            </ul>
        </nav>
    </header>
    <h1>Jardines Verticales</h1>
    <h2>Semillas de Plantas</h2>
    <?php
    function obtenerHora(){
        $dtz = new DateTimeZone("America/Mexico_City");
        $dt = new DateTime("now", $dtz);
        $HoraActual = $dt->format("h:i:s a");
        return $HoraActual;
    }
    echo "Son las ".obtenerHora()."<br>";
    ?>
    <ul>
        <li><b>Plantas Ornamentales</b></li>
        <ol><li>Orquidea
        <figure><img src="./Plantas/orquidea.jpg" alt="" id="flowers"></figure> 
        </li>
        <li>Girasol
        <figure><img src="./Plantas/girasol.jpg" alt="" id="flowers"></figure> 
        </li>
        <li>Dalia</li>
        <li>Margarita</li>
    </ol>
        <li><b>Arboles</b></li>
        <ol>
            <li><a href="https://www.lifeder.com/jacaranda-genero/">Jacaranda</a>
            <figure><img src="./Plantas/jacaranda.jpg" alt="" id="flowers"></figure>
            </li>
            <li><a href="https://www.ecobotanico.com/ahuehuete/">Ahuehuete</a>          
            </li>
            <li><a href="https://www.lifeder.com/cedros/">Cedro</a>
            <figure><img src="./Plantas/cedro.jpg" alt="" id="flowers"></figure> 
            </li>
        </ol>
        <li><b>Cactaceas</b></li>
        <ol>
            <li><a href="https://www.mexicodesconocido.com.mx/sabila.html">Sábila</a></li>
            <li>Cactus</li>
        </ol>
    </ul>
    <h2>Registro de Datos</h2>
    <form action="">
        <label for="nombre">
            <span>¿Como te llamas?</span>
            <input type="text" name=nombre id=nombre placeholder="Your name">
        </label>
    </form>
</body>
</html>