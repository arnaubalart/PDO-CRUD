<?php
include 'conexion.php';
include 'alumno.php';
$stmt = $pdo->prepare("INSERT INTO alumnos (email, nombre, apellido, edad) VALUES (?, ?, ?, ?)");
// Bind
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad=$_POST['edad'];
$email=$_POST['email'];

$stmt->bindParam(1, $email);
$stmt->bindParam(2, $nombre);
$stmt->bindParam(3, $apellido);
$stmt->bindParam(4, $edad);
// Excecute
if($stmt->execute()){
    header('location:vista.php');
}else{echo "algo falla";}