<?php
// Iniciar la sesión (asegúrate de hacerlo antes de cualquier salida HTML)
session_start();

// Definir los datos de conexión a la base de datos
include('dbcon.php');


// Verificar si el usuario está autenticado
if (isset($_SESSION['usuario_id'])) {
    header("Location: /index.php");
    exit();
}

// Función para verificar credenciales y obtener el nombre del usuario
function verificarCredenciales($con, $correo, $contraseña)
{
    $query = "SELECT id, Nombre FROM logins WHERE correo = ? AND contraseña = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $correo, $contraseña);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_name'] = $usuario['Nombre'];
        return true; // Devolver true para indicar credenciales correctas
    } else {
        return false; // Credenciales incorrectas
    }
}

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = mysqli_real_escape_string($con, $_POST["Correo"]);
    $contraseña = mysqli_real_escape_string($con, $_POST["Contraseña"]);

    if (verificarCredenciales($con, $correo, $contraseña)) {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <div class="container text-center py-6">
            <div class="row">
                <div class="col-lg-6 col-xl-5 mx-auto">
                    <div class="lc-block mb-3">
                    <br>
                    <br>
                    <br>
                        <img class="py-5  img-fluid wp-image-1892 breathe-animation" src="/source/fians1.png" width="" height="39" srcset="" sizes="" alt="">
                    </div>
                    <div class="lc-block mb-3">
                        <div editable="rich">
                            <h1>Bienvenido a la facultad de ingenieria tampico</h1>
                        </div>
                    </div>
                    <div class="lc-block mb-5">
                        <div editable="rich">
                            <p class="lead ">Esta pagina te redigira en...<span id="countdown">1</span><p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>';

        // Redirigir a otra página después de 3 segundos
        header("refresh:4;url=/login.php");
        exit();
    } else {
        $error = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}

// Cerrar sesión
if (isset($_GET['logout'])) {
    // Destruir todas las variables de sesión
    session_destroy();
    // Redirigir a la página de inicio de sesión o a donde desees después de cerrar sesión
    header("Location: /login.php");
    exit();
}

// Cerrar la conexión con la base de datos al finalizar el script
mysqli_close($con);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="Scripts/ScriptsAnimaciones.js">
    <link rel="stylesheet" href="Estilos/style-login.css">
    <link rel="stylesheet" href="bootsrap/css/.">
    <link rel="stylesheet" href="dessign.css">
    <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="bootsrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>



<style>
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

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

<body>
    <div class="blurry-background"></div>
    <section class="vh-200">
        <br>
        <br>
        <div class="container h-8">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-7">
                    <div class="card shadow-lg p-3 mb-5 bg-body rounded" style="border-radius: 1rem;">
                        <!-- ... -->
                        <div class="card-body p-4 p-lg-5 text-black">
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <img src="/source/fians1.png" alt="logo" style="height: 200px;">
                                </div>
                                <div class="form-outline mb-4">
                                    <h5 class="fw-semibold mb-3 pb-3" style="letter-spacing: 1px;">Inicia Sesion</h5>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" id="Correo" name="Correo" class="form-control form-control-lg" required />
                                    <label class="form-label">Correo</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="Contraseña" id="Contraseña" class="form-control form-control-lg" required />
                                    <label class="form-label">Contraseña</label>
                                </div>
                                <div class="pt-1 mb-4">
                                    <!-- Corrige el tipo de botón y agrega un atributo "name" -->
                                    <button class="btn btn-success lg btn-block" type="submit" name="submit">Inicia Sesion</button>
                                </div>
                                <?php
                                if (isset($error)) {
                                    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                                }
                                ?>
                                <a class="small text-muted" href="#!">¿No recuerdas tu contraseña?</a>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes cuenta? <a href="register.php" style="color: #393f81;">Regístrate aquí</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>