<?php
include 'conexion.php';
include 'alumno.php';
$sentencia=$pdo->prepare("SELECT * FROM alumnos");
$sentencia->execute();
$listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
