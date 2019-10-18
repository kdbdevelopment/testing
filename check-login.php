<?php
 session_start();
 require 'conexion.php';
 $usuario = $_POST['Usuario']; 
 $password = $_POST['Password'];
			

$sql= "SELECT count(*) AS existe FROM usuarios WHERE Nombre_Usuario = '$usuario' 
AND Password_Usuario = '$password' ";
$resultado = $con->query($sql); 
$usuario = $resultado->fetch();
    if($usuario['existe' ] > 0){
         $_SESSION['login'] = true;
     
        header("Location: index.php");
    } 
    else{
        header("Location: login.php?incorrecto=true");  
        }
   ?>