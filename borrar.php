<?php 
include 'conexion.php';
include 'persona.php';

$stmt = $pdo->prepare("DELETE FROM alumnos WHERE email=?");
// Bind
$email = $_POST['email'];

$stmt->bindParam(1, $email);
if($stmt->execute()){
    header('location:vista.php');
}else{
    echo "algo falla";
}