<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }

require 'conexion.php';

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$edad = $_POST['Edad'];

$sql = "INSERT INTO escritores (Apellido, Nombre, Edad) 
        VALUES  ('$apellido', '$nombre', '$edad') ";
$resultado = $con->query($sql);    
if($resultado){
    echo"<h1>Escritor creado exitosamente</h1>";?>
        <a class="btn btn-primary" href="javascript:location.href='index.php'">Volver al inicio</a>
    <?php
}
else{
   echo "<h1 style=color:red>hubo un error </h1>";
}
?>