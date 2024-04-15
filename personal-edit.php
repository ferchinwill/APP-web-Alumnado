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
                        <h4>Editar Personal
                            <a href="Personal_Academico.php" class="btn btn-danger float-end">Volver</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $personal_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM personal_academico WHERE id='$personal_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $personal = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="personal_id" value="<?= $personal['ID']; ?>">
                                    <div class="mb-3">
                                        <label>Nombre de personal</label>
                                        <input type="text" name="Nombre" value="<?= $personal['Nombre']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellido de personal</label>
                                        <input type="text" name="Apellido" value="<?= $personal['Apellido']; ?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Grado</label>
                                        <select class="form-select" name="CargoID" class="form-control">
                                            <option <?= ($personal['CargoID'] == 'Rector') ? 'selected' : ''; ?>>Rector</option>
                                            <option <?= ($personal['CargoID'] == 'Vicerrector') ? 'selected' : ''; ?>>Vicerrector</option>
                                            <option <?= ($personal['CargoID'] == 'Decano') ? 'selected' : ''; ?>>Decano</option>
                                            <option <?= ($personal['CargoID'] == 'Director de departamento') ? 'selected' : ''; ?>>Director de departamento</option>
                                            <option <?= ($personal['CargoID'] == 'Jefe de estudios') ? 'selected' : ''; ?>>Jefe de estudios</option>
                                            <option <?= ($personal['CargoID'] == 'Profesor') ? 'selected' : ''; ?>>Profesor</option>
                                            <option <?= ($personal['CargoID'] == 'Investigador') ? 'selected' : ''; ?>>Investigador</option>
                                            <option <?= ($personal['CargoID'] == 'Administrador') ? 'selected' : ''; ?>>Administrador</option>
                                            <option <?= ($personal['CargoID'] == 'Secretario') ? 'selected' : ''; ?>>Secretario</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>DepartamentoID</label>
                                        <select class="form-select" name="DepartamentoID" id="DepartamentoID" value="<?= $personal['DepartamentoID']; ?>">
                                        <option>Selecciona un departamento</option>
                                            <option      >Matemáticas</option>
                                            <option      >Física</option>
                                            <option      >Química</option>
                                            <option      >Biología</option>
                                            <option      >Informática</option>
                                            <option      >Ingeniería</option>
                                            <option      >Economía</option>
                                            <option      >Derecho</option>
                                            <option      >Medicina</option>
                                            <option      >Psicología</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="Telefono" value="<?= $personal['Telefono']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="Email" value="<?= $personal['Email']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Salario</label>
                                        <input type="text" name="Salario" value="<?= $personal['Salario']; ?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_personal" class="btn btn-primary">
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