<?php

require 'dbcon.php';


if (!isset($_SESSION['usuario_name'])) {
	// Si no ha iniciado sesión, redirige al formulario de inicio de sesión
	header('Location: /login.php');
	exit();
}

// Imprime el nombre del usuario
$nombre_usuario = $_SESSION['usuario_name'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu Sitio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container d-flex align-items-center">
            <a href="/index.php"><img src="source/fians1.png" alt="" style="height: 150px;"></a>
            <button class="  navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <style>
                    .bi-facebook:hover {
                        color: #2e00fd;
                    }

                    .bi-instagram:hover {
                        color: #e7074a;
                    }

                    .bi-whatsapp:hover {
                        color: #009732;
                    }

                    .dropdown-menu {
                        display: none;
                        transition: display 0.3s ease;
                    }

                    .dropdown-toggle:hover+.dropdown-menu,
                    .dropdown-menu:hover {
                        display: block;
                    }

                    .dropdown-item:hover {
                        transition: display 0.3s ease;
                        color: gray;
                    }
                </style>
                <div class="ms-auto" style="padding-top: 30px;">
                    <div class="d-inline-block me-2">

                    </div>
                    <div class="d-inline-block me-2 ">

                    </div>
                    <div class="d-inline-block me-2">
                        <li class="nav-item dropdown  btn btn-light" style="list-style: none;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo "Bienvenido, $nombre_usuario!"; ?>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                       Integrantes del equipo
                                    </a>
                                </li>

                                <li><a id="salir" class="dropdown-item" href="/logout.php">Cerrar sesión</a></li>

                            </ul>
                        </li>
                    </div>

                </div>
            </div>

        </div>
    </nav>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Integrantes del equipo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <li style="list-style: none; font-style: bold;">Moreno Wilches Fernando</li>
                        a2193330272
                    </ul>

                </div>
                <div class="modal-body">
                    <ul>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <li style="list-style: none;">Larraga Izaguirre Joan Emmanuel</li>
                        a2193330268
                    </ul>
                </div>
                <div class="modal-footer">


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VoPF0p3+qpzqCwW5EBg0MQsQ8iNpVj82+g4dR2AGiDgbbG7lRht7WjYkScjw/3F5" crossorigin="anonymous"></script>

    <!-- Vertically centered modal -->

</body>

</html>