<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto01</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://localhost:8080">
            <img src="./img/logo.png" height="100px">
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="http://localhost:8080">
                    <?php echo "Inicio"?>
                </a>
                <a class="navbar-item" href="http://localhost:8080/producto.php">
                    <?php echo "Producto"?>
                </a>
                <a class="navbar-item" href="http://localhost:8080/nosotros.php">
                    <?php echo "Nosotros"?>
                </a>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
        <h1 class="title">
            Sobre Nosotros
        </h1>
        <div class="columns">
            <div class="column">
                <img src="<?php echo ./img/persona01.jpg"?>">
            </div>
            <div class="column">
                <img src="./img/persona02.jpg">
            </div>
            <div class="column">
                <img src="./img/persona03.jpg">
            </div>
            <div class="column">
                <img src="./img/persona04.jpg">
            </div>
            </div>
        </div>
    </section>
</body>
</html>