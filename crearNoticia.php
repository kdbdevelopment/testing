<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
require 'conexion.php';

$titulo = $_POST['Titulo'];
$subtitulo = $_POST['Subtitulo'];
$fecha = $_POST['Fecha'];
$noticia = $_POST['Noticia'];
$tema = $_POST['Tema'];
$escritores =  $_POST['Escritores'];

$sql = "INSERT INTO noticias (Titulo, Subtitulo, Fecha, Noticia_Desarrollo, Tema, Id_Escritor) 
        VALUES  ('$titulo', '$subtitulo', '$fecha', '$noticia', '$tema', '$escritores') ";
$resultado = $con->query($sql);    
if($resultado){
    echo"<h1 style='color:green'>Noticia creada exitosamente</h1>
    <a class='btn btn-primary' href='index.php'>Volver al index</a>";
}
