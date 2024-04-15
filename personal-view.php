<?php
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

    <title>Student View</title>
</head>

<body>

    <div class="container mt-5">
   
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles de personal
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
                                <div class="mb-3">
                                    <label>ID</label>
                                    <p class="form-control">
                                        <?= $personal['ID']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Nombre</label>
                                    <p class="form-control">
                                        <?= $personal['Nombre']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Apellido </label>
                                    <p class="form-control">
                                        <?= $personal['Apellido']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>CargoID</label>
                                    <p class="form-control">
                                        <?= $personal['CargoID']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>DepartamentoID</label>
                                    <p class="form-control">
                                        <?= $personal['DepartamentoID']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Telefono</label>
                                    <p class="form-control">
                                        <?= $personal['Telefono']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $personal['Email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Salario</label>
                                    <p class="form-control">
                                        <?= $personal['Salario']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>fecha</label>
                                    <p class="form-control">
                                        <?= $personal['fecha']; ?>
                                    </p>
                                </div>


                        <?php
                            } else {
                                echo "<h4>no se pido encontrar el personal</h4>";
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