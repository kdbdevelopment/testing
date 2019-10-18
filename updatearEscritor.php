<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<?php
  session_start();
if(!isset($_SESSION['login'])) {
header('Location: login.php');
}
require 'conexion.php';
$id =  $_POST['Id_Escritor'];
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$edad = $_POST['Edad'];


$sql = "UPDATE escritores SET Nombre = '$nombre' , Apellido = '$apellido', Edad = '$edad'
        WHERE Id_Escritor ='$id'";
$resultado = $con->query($sql);
if($resultado){
    echo"<h1>Escritor Modificado</h1>
    <a class='btn btn-primary' href='index.php''>Volver al inicio</a>";
}
