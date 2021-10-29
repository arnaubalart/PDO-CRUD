<?php
 try{
     $pdo=new PDO('mysql:host=localhost;dbname=bd_escola','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
     echo "<script> console.log('conexion establecida')</script>";

 }catch(PDOException $e){
    echo $e->getMessage();
    echo "<script> alert('Error de conexion')</script>";
 }
 ?>