<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
require 'conexion.php';
$id =  $_POST['Id_Noticia'];
$titulo = $_POST['Titulo'];
$subtitulo = $_POST['Subtitulo'];
$fecha = $_POST['Fecha'];
$noticia = $_POST['Noticia'];
$tema = $_POST['Tema'];

$sql = "UPDATE noticias SET Titulo = '$titulo' , Subtitulo = '$subtitulo', Fecha = '$fecha', Noticia_Desarrollo = '$noticia', Tema = '$tema' 
        WHERE Id_Noticia ='$id'";
$resultado = $con->query($sql);
if($resultado){
    echo"<h1>Noticia Modificada</h1>
    <a class='btn btn-primary' href='index.php'>Volver a noticias</a>";
}
