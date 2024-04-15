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

// Establecer la cantidad de datos por página
$datos_por_pagina = 50;

// Obtener el número de página actual
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $pagina = $_GET['page'];
} else {
    $pagina = 1;
}

// Calcular el offset para la consulta SQL
$offset = ($pagina - 1) * $datos_por_pagina;

// Consulta SQL para obtener solo los datos de la página actual
$query = "SELECT * FROM personal_academico LIMIT $offset, $datos_por_pagina";
$query_run = mysqli_query($con, $query);
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
    <section> <!-- ========== Nav bar ========== -->
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
        <div class="blurry-background"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Academico
                            <a href="Formularios.php" class="btn btn-primary float-end">Añadir Personal </a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>
                                    <th>Departamento</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Salario</th>
                                    <th>Fecha de Contratacion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $personal) {
                                ?>
                                        <tr>
                                            <td><?= $personal['ID']; ?></td>
                                            <td><?= $personal['Nombre']; ?></td>
                                            <td><?= $personal['Apellido']; ?></td>
                                            <td><?= $personal['CargoID']; ?></td>
                                            <td><?= $personal['DepartamentoID']; ?></td>
                                            <td><?= $personal['Telefono']; ?></td>
                                            <td><?= $personal['Email']; ?></td>
                                            <td><?= $personal['Salario']; ?></td>
                                            <td><?= $personal['fecha']; ?></td>

                                            <td>
                                                <a href="personal-view.php" class="btn ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16" style=" margin-top: -2px;">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                    </svg>

                                                </a>

                                                <a href="personal-edit.php?id=<?= $personal['ID']; ?>" class="btn ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                                    </svg>

                                                </a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?= $student['ID']; ?>" class="btn ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                        </svg>

                                                    </button>
                                                </form>

                                                <a href="student-edit.php?id=<?= $personal['ID']; ?>" class="btn btn-warning btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333a.9.9 0 0 1 .609.152.8.8 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z" />
                                                    </svg>
                                                    Imprimir ficha
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No se pudo Guardar el Alumno </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                        <!-- Aquí se añade la sección de paginación -->
                        <div class="pagination">
                            <?php
                            $query_total = "SELECT COUNT(*) as total FROM personal_Academico";
                            $query_total_run = mysqli_query($con, $query_total);
                            $total = mysqli_fetch_assoc($query_total_run)['total'];
                            $total_paginas = ceil($total / $datos_por_pagina);

                            if ($pagina > 1) {
                                echo '<a href="?page=' . ($pagina - 1) . '"></a>';
                            }
                            ?>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item <?= $pagina == 1 ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=<?= $pagina - 1 ?>" tabindex="-1">Anterior</a>
                                    </li>
                                    <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                                        <li class="page-item <?= $pagina == $i ? 'active' : '' ?>">
                                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item <?= $pagina == $total_paginas ? 'disabled' : '' ?>">
                                        <a class="page-link" href="?page=<?= $pagina + 1 ?>">Siguiente</a>
                                    </li>
                                </ul>
                            </nav>
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