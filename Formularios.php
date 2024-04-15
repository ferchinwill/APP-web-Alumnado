<?php
session_start();
require 'dbcon.php';
// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí puedes procesar los datos enviados por cada formulario
    // Por ejemplo:
    if (isset($_POST['form1_submit'])) {
        // Procesar formulario 1
    } elseif (isset($_POST['form2_submit'])) {
        // Procesar formulario 2
    } elseif (isset($_POST['form3_submit'])) {
        // Procesar formulario 3
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varios Formularios</title>
</head>

<body>
    <?php include('plantillas/header.php'); ?>
    <div>
        <button onclick="mostrarFormulario('form1')">Alumnado</button>
        <button onclick="mostrarFormulario('form2')">Personal Academico</button>
        <button onclick="mostrarFormulario('form3')">Personal</button>
    </div>
    <div class="container mt-5">




        <!-- Formulario 1   Alumnos-->
        <div id="form1" style="display: block;">
            <div editable="rich">
                <h2 class="display-2 fw-bold"> <span class="text-primary">Alumnado!</span></h2>
            </div>
            <div class="container mt-5">
                <?php include('message.php'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Añadir Alumno
                                    <a href="Alumnado_registros.php" class="btn btn-danger float-end">Volver</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST">

                                    <div class="mb-3">
                                        <label>Grado</label>
                                        <select class="form-select" name="Grado" id="Grado">
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
                                        <select class="form-select" name="Genero" id="Genero">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Correo</label>
                                        <input type="text" name="correo" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>carrera</label>

                                        <select class="form-select" name="carrera" id="carrera">
                                            <option>Ing.Negocios</option>
                                            <option> Ing.Industrial </option>
                                            <option> Ing.civil </option>
                                            <option> Ing.Sist.Computacionales </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="save_student" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        </div>
        <!-- Formulario 1   Alumnos-->





        <!-- Formulario 2   Personal Academico-->
        <div id="form2" style="display: none;">
            <div class="lc-block mb-4">
                <div editable="rich">
                    <h2 class="display-2 fw-bold">Personal <span class="text-primary">Academico!</span></h2>
                </div>
            </div>
            <div class="container mt-5">
                <?php include('message.php'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Añade tu personal nuevo
                                    <a href="Personal_Academico.php" class="btn btn-danger float-end">Volver</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST">
                                    <div class="mb-3">
                                        <label>Nombre</label>
                                        <input type="text" name="Nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Apellido</label>
                                        <input type="text" name="Apellido" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Cargo</label>
                                        <select class="form-select" name="CargoID" id="CargoID">
                                            <option >Selecciona un cargo</option>
                                            <option >Rector</option>
                                            <option >Vicerrector</option>
                                            <option >Decano</option>
                                            <option >Director de departamento</option>
                                            <option >Jefe de estudios</option>
                                            <option >Profesor</option>
                                            <option >Investigador</option>
                                            <option >Administrador</option>
                                            <option >Secretario</option>
                                            <option >Psicologo</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Departamento</label>
                                        <select class="form-select" name="DepartamentoID" id="DepartamentoID">
                                            <option>Selecciona un departamento</option>
                                            <option>Matemáticas</option>
                                            <option>Física</option>
                                            <option>Química</option>
                                            <option>Biología</option>
                                            <option>Informática</option>
                                            <option>Ingeniería</option>
                                            <option>Economía</option>
                                            <option>Derecho</option>
                                            <option>Medicina</option>
                                            <option>Psicología</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="Telefono" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="Email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Salario</label>
                                        <input type="text" name="Salario" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="save_personal" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        </div>









        <!-- Formulario 3 -->
        <div id="form3" style="display: none;">
            <h2>Formulario 3</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <!-- Campos del formulario 3 -->
                <button type="submit" name="form3_submit">Enviar Formulario 3</button>
            </form>
        </div>
















        <!-- Botones para cambiar entre formularios -->

    </div>

    <script>
        function mostrarFormulario(idFormulario) {
            // Ocultar todos los formularios
            document.getElementById('form1').style.display = 'none';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'none';

            // Mostrar el formulario seleccionado
            document.getElementById(idFormulario).style.display = 'block';
        }
    </script>
</body>

</html>