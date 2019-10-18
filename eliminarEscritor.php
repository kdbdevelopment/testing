<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
?>
<head>

<script src="https://code.jquery.com/jquery-1.12.0.min.js">

</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<?php
require 'conexion.php';

$id = $_GET['idborrar'];
$sql = "DELETE FROM escritores WHERE Id_Escritor = '$id'";
$resultado = $con->query($sql);

if($resultado){
    echo" <h1 >Escritor eliminado con exito<h1>";?>
    <a class="btn btn-primary" href="javascript:location.href='index.php'">Volver al inicio</a>
    <?php
}
else{
   echo error_get_last();
}
?>