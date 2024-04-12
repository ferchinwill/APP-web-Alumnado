<?php
session_start();
require 'dbcon.php';
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

<body>
    <?php include('plantillas/header.php'); ?>
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Alumno
                            <a href="index.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM alumnos WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">
                                    <div class="mb-3">
                                        <label>Grado</label>

                                        <select class="form-select" name="Grado" value="<?= $student['Grado']; ?>" class="form-control">
                                            <option>1º</option>
                                            <option>2º</option>
                                            <option>3º</option>
                                            <option>4º</option>
                                            <option>5º</option>
                                            <option>6º</option>
                                            <option>7º</option>
                                            <option>8º</option>
                                            <option>9º</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Genero</label>
                                        <select class="form-select" name="Genero" id="Genero" value="<?= $student['Genero']; ?>">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nombre Alumno</label>
                                        <input type="text" name="nombre" value="<?= $student['nombre']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo</label>
                                        <input type="email" name="correo" value="<?= $student['correo']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" value="<?= $student['telefono']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Curso</label>
                                        <select class="form-select" name="carrera" id="carrera" value="<?= $student['carrera']; ?>">
                                            <option>Ing.Negocios</option>
                                            <option> Ing.Industrial </option>
                                            <option> Ing.civil </option>
                                            <option> Ing.Sist.Computacionales </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Actualizar alumno
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No se encontraron datos</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>