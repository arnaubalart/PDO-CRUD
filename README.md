# PDO-CRUD
### Para que funcione, en primer lugar necesitarás una conexión a la base de datos. Para ello, tendrás que utilizar los siguientes comandos:
```
<?php
 try{
     $pdo=new PDO('mysql:host=localhost;dbname=NOMBRE_BD','USUARIO','CONTRASEÑA',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
     echo "<script> console.log('conexion establecida')</script>";

 }catch(PDOException $e){
    echo $e->getMessage();
    echo "<script> alert('Error de conexion')</script>";
 }
 ?>
```
