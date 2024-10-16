<?php

    $users = "root";
    $pass = "";
    $server = "localhost";
    $nameDB = "escuela";

    try {
        $conexion = new PDO("mysql:host=$server;dbname=$nameDB;",$users,$pass);
    }   catch (PDOException $e) {
        die("coneccion fallida". $e);
    }
?>