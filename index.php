<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio  Portal colaborativo</title>
    
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Portal colaborativo</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="calculadora.php">calculadora</a></li>
                <li><a href="promedio.php">promedio</a></li>
                <li><a href="tabla.php">tabla </a></li>
                <li><a href="evaluador.php">evaluador </a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="bienvenida">
            <h2>Bienvenido a nuestro Portal</h2>
            <p>Este espacio ha sido diseñado para ofrecer una colección de soluciones y herramientas interactivas automatizadas, orientadas a optimizar tareas y resolver problemas específicos de manera rápida y eficiente.</p>
        </section>
        <section class="herramientas-seccion">
            <h2>Nuestras Herramientas</h2>
            <div class="grid-herramientas">
                <div class="tarjeta">
                    <h3>Herramienta 1</h3>
                    <p>Descripción corta de lo que hace la primera herramienta.</p>
                    <a href="calculadora.php" class="boton">Acceder</a>
                </div>
                <div class="tarjeta">
                    <h3>Herramienta 2</h3>
                    <p>Descripción corta de lo que hace la segunda herramienta.</p>
                    <a href="promedio.php" class="boton">Acceder</a>
                </div>
                <div class="tarjeta">
                    <h3>Herramienta 3</h3>
                    <p>Descripción corta de lo que hace la tercera herramienta.</p>
                    <a href="tabla.php" class="boton">Acceder</a>
                </div>
                <div class="tarjeta">
                    <h3>Herramienta 3</h3>
                    <p>Descripción corta de lo que hace la tercera herramienta.</p>
                    <a href="evaluador.php" class="boton">Acceder</a>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="creditos">
            <h3>Integrantes del Proyecto</h3>
            <ul>
                <li>Integrante 1: Juan Miguel</li>
                <li>Integrante 2: Antony</li>
                <li>Integrante 3: Dylan </li>
            </ul>
        </div>
    </footer>
</body>
</html>
<?php include 'menu.php' ?>