<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = ucfirst($pg) ?>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body id=<?php echo " $pg " ?>>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="row collapse navbar-collapse mb-3 mt-3" id="navbarsExampleDefault">
                    <div class="col-4 col-sm-6 px-2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $pg == "inicio" ? "active" : ""; ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $pg == "sobre-mi" ? "active" : ""; ?>" href="sobre-mi.php">Sobre mi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $pg == "proyectos" ? "active" : ""; ?>" href="proyectos.php">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $pg == "contacto" ? "active" : ""; ?>" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-none d-sm-block col-sm-6 text-right">
                        <a href="" id="btn-CV">DESCARGÁ MI CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>