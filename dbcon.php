<?php

$con = mysqli_connect("localhost", "root", "", "universidad");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
