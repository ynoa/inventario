<?php $url_base="http://localhost/inventario"?>
<!doctype html>
<html lang="en">
    <head>
        <title>Gestion Inventario</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand navbar-light bg-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $url_base;?>/index.php" aria-current="page"
                            >Sistema Web de Inventarios <span class="visually-hidden">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base;?>/Controller/controller_mostrar_producto.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base;?>/view/usuarios/index.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url_base;?>/view/reportes/index.php">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cerrar Seccion</a>
                    </li>
                </ul>
            </nav>
            
        </header>
        <main class="container">