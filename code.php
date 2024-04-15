<?php
session_start();
require 'dbcon.php';

if (isset($_POST['delete_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM alumnos WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Estudiante eliminado";
        header("Location: Alumnado_registros.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Estudiante no pudo eliminarse";
        header("Location: Alumnado_registros.php");
        exit(0);
    }
}

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $Grado = mysqli_real_escape_string($con, $_POST['Grado']);
    $Genero = mysqli_real_escape_string($con, $_POST['Genero']);
    $name = mysqli_real_escape_string($con, $_POST['nombre']);
    $email = mysqli_real_escape_string($con, $_POST['correo']);
    $phone = mysqli_real_escape_string($con, $_POST['telefono']);
    $course = mysqli_real_escape_string($con, $_POST['carrera']);

    $query = "UPDATE alumnos SET Grado='$Grado', Genero='$Genero', nombre='$name', correo='$email', telefono='$phone', carrera='$course' WHERE id='$student_id'";
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
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
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
        header("Location: Formularios.php");##student-create.php
        exit(0);
    } else {
        $_SESSION['message'] = "No se creó ningún estudiante";
        header("Location: Formularios.php");
        exit(0);
    }
}





############################################
#Personal Academico



if (isset($_POST['delete_personal'])) {
    $pesonal_id = mysqli_real_escape_string($con, $_POST['delete_personal']);

    $query = "DELETE FROM personal_academico WHERE id='$pesonal_id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "personal eliminado";
        header("Location: Personal Academico.php");
        exit(0);
    } else {
        $_SESSION['message'] = "personal no pudo eliminarse";
        header("Location: Personal Academico.php");
        exit(0);
    }
}
if (isset($_POST['update_personal'])) {
    $personal_id = mysqli_real_escape_string($con, $_POST['ID']);
    $Nombre_Personal = mysqli_real_escape_string($con, $_POST['Nombre']);
    $Apellido_Personal = mysqli_real_escape_string($con, $_POST['Apellido']);
    $Cargo_Personal = mysqli_real_escape_string($con, $_POST['CargoID']);
    $Departamento_Personal = mysqli_real_escape_string($con, $_POST['DepartamentoID']);
    $Telefono_Personal = mysqli_real_escape_string($con, $_POST['Telefono']);
    $Email_Personal = mysqli_real_escape_string($con, $_POST['Email']);
    $Salario_Personal = mysqli_real_escape_string($con, $_POST['Salario']);

    $query = "UPDATE personal_academico SET Nombre='$Nombre_Personal', Apellido='$Apellido_Personal', CargoID='$Cargo_Personal', DepartamentoID='$Departamento_Personal', Telefono='$Telefono_Personal', Email='$Email_Personal', Salario='$Salario_Personal' WHERE id='$personal_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Personal actualizado";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "No se pudo actualizar el personal";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['save_personal'])) {
    $personal_id = mysqli_real_escape_string($con, $_POST['ID']);
    $Nombre_Personal = mysqli_real_escape_string($con, $_POST['Nombre']);
    $Apellido_Personal = mysqli_real_escape_string($con, $_POST['Apellido']);
    $Cargo_Personal = mysqli_real_escape_string($con, $_POST['CargoID']);
    $Departamento_Personal = mysqli_real_escape_string($con, $_POST['DepartamentoID']);
    $Telefono_Personal = mysqli_real_escape_string($con, $_POST['Telefono']);
    $Email_Personal = mysqli_real_escape_string($con, $_POST['Email']);
    $Salario_Personal = mysqli_real_escape_string($con, $_POST['Salario']);

    $query = "INSERT INTO personal_academico (Nombre, Apellido, CargoID, DepartamentoID, Telefono, Email, Salario) VALUES ('$Nombre_Personal', '$Apellido_Personal', '$Cargo_Personal', '$Departamento_Personal', '$Telefono_Personal', '$Email_Personal', '$Salario_Personal')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Personal creado";
        header("Location: Formularios.php");
        exit(0);
    } else {
        $_SESSION['message'] = "No se pudo crear el personal";
        header("Location: Formularios.php");
        exit(0);
    }
}
