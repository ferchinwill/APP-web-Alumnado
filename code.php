<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM alumnos WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Estudiante eliminado";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Estudiante no pudo eliminarse";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['id']);
    $Grado = mysqli_real_escape_string($con, $_POST['Grado']);
    $Genero = mysqli_real_escape_string($con, $_POST['Genero']);
    $name = mysqli_real_escape_string($con, $_POST['nombre']);
    $email = mysqli_real_escape_string($con, $_POST['correo']);
    $phone = mysqli_real_escape_string($con, $_POST['telefono']);
    $course = mysqli_real_escape_string($con, $_POST['carrera']);

    $query = "UPDATE alumnos SET nombre='$name', correo='$email', telefono='$phone', carrera='$course', Grado='$Grado', Genero='$Genero' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Estudiante Actualizado";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "No se pudo actualizar";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['save_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['id']);
    $Grado = mysqli_real_escape_string($con, $_POST['Grado']);
    $Genero = mysqli_real_escape_string($con, $_POST['Genero']);
    $name = mysqli_real_escape_string($con, $_POST['nombre']);
    $email = mysqli_real_escape_string($con, $_POST['correo']);
    $phone = mysqli_real_escape_string($con, $_POST['telefono']);
    $course = mysqli_real_escape_string($con, $_POST['carrera']);

    $query = "INSERT INTO alumnos (nombre, correo, telefono, carrera, Grado, Genero) VALUES ('$name', '$email', '$phone', '$course', '$Grado', '$Genero')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Estudiante creado";
        header("Location: student-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "No se creó ningún estudiante";
        header("Location: student-create.php");
        exit(0);
    }
}
