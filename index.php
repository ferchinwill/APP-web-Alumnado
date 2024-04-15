<?php
session_start();
require 'dbcon.php';

if (!isset($_SESSION['usuario_name'])) {
    // Si no ha iniciado sesión, redirige al formulario de inicio de sesión
    header('Location: /login.php');
    exit();
}
// Imprime el nombre del usuario
$nombre_usuario = $_SESSION['usuario_name'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<header>
    <style>
        /* Estilos para la sección con fondo desenfocado */
        .blurry-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/source/ai.jpg');
            /* Reemplaza 'ruta/de/la/imagen-desenfocada.jpg' con la ruta real de tu imagen desenfocada */
            background-size: cover;
            filter: blur(5px);
            /* Cambia el valor de 'blur' según quieras más o menos desenfoque */
            z-index: -1;
            /* Asegura que el fondo desenfocado esté detrás de todo */
        }

        /* Estilos para el contenido de la página */
        .content {
            position: relative;
            z-index: 1;
            /* Asegura que el contenido esté delante del fondo desenfocado */
        }

        /* Estilos para el fondo rojo */
        .red-background {
            background-color: red;
        }

        .line {
            border-color: blue;

            border-width: 2px;
            height: 10px;
            width: auto;
        }

        /* Otros estilos según tu diseño */
    </style>
</header>


<body>
    <section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container d-flex align-items-center">
                    <a href="/index.php"><img src="source/fians1.png" alt="" style="height: 150px;"></a>
                    <button class="  navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav " style="padding-top: 30px; padding-left: 25px;">
                            <li class="nav-item">
                                <a class="nav-link active py-" href="plantillas.html" aria-current="page">
                                    <span class="visually-hidden">(current)</span></a>
                            </li>
                        </ul>
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
                                <li class="nav-item dropdown  btn btn-danger" style="list-style: none;">
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
        </header>

    </section>







    <div class="container mt-4">
        <?php include('message.php'); ?>
        <!---<div class="blurry-background"></div>---->
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="bento-card">
                        <div class="card text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="true" href="#">Active tab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled tab</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <script>
                                    const ctx = document.getElementById("chart").getContext('2d');
                                    const myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ["rice", "yam", "tomato", "potato",
                                                "beans", "maize", "oil"
                                            ],
                                            datasets: [{
                                                label: 'food Items',
                                                backgroundColor: 'rgba(161, 198, 247, 1)',
                                                borderColor: 'rgb(47, 128, 237)',
                                                data: [300, 400, 200, 500, 800, 900, 200],
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true,
                                                    }
                                                }]
                                            }
                                        },
                                    });
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
                <style>
                    .card:hover {
                        box-shadow: rgba(0, 0, 0, 0.35) 0px 10px 20px;
                        transition: box-shadow 0.3s ease-in-out;
                        transform: scale(1.05);
                        transition: transform 0.3s ease-in-out;
                    }

                    .elemento:hover {
                        transform: scale(1.05);
                        transition: transform 0.3s ease-in-out;
                    }
                </style>
                <div class="col-md-4 center">
                    <div class="card" style="border-radius: 15px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <img class="card-img-top" src="/source/Humaaans - 2 Characters.png" alt="Equipo Administrativo">
                        <div class="card-body">
                            <h4 class="card-title">Personal Academico</h4>
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                            <a href="Personal_Academico.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-5 row">
                <div class=" col-md-4">
                    <div class="card" style="border-radius: 15px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <img class="card-img-top" src="/source/Croods - The Feedback.png" alt="Equipo Administrativo">
                        <div class="card-body">
                            <h4 class="card-title">??</h4>
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border-radius: 15px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <img class="card-img-top" src="/source/Humaaans - 3 Characters.png" alt="Equipo Administrativo">
                        <div class="card-body">
                            <h4 class="card-title">Alumnos</h4>
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                            <a href="/Alumnado_registros.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border-radius: 15px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <img class="card-img-top" src="/source/team.PNG" alt="Equipo Administrativo">
                        <div class="card-body">
                            <h4 class="card-title">Equipo Fians</h4>
                            <p class="lead">
                                This is a lead paragraph. It stands out from regular paragraphs.
                            </p>
                            <a href="/Alumnado_registros.php" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

<footer>
    <div class="py-10">
        <?php include('plantillas/footer.php'); ?>
    </div>
</footer>

</html>