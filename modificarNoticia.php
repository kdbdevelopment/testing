<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
?>
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<?php
require 'conexion.php';
$id = $_GET['idmodificar'];
$sql = "SELECT * FROM noticias WHERE Id_Noticia = '$id'";
$resultado = $con->query($sql);

foreach ($resultado as $rows) { ?>
<h1> Modificar Noticia </h1>
<form class="link-nav" action="updatearNoticia.php" method="POST">
<div><input type="hidden" name="Id_Noticia"  value="<?php echo $rows['Id_Noticia']; ?>" /></div> <br>
<div><input type="text" name="Titulo"  value="<?php echo $rows['Titulo']; ?>" /></div> <br>
	<div><textarea type="text" name="Subtitulo"   placeholder="Subtítulo"><?php echo $rows['Subtitulo']; ?></textarea></div><br>
	<div><input type="date" name="Fecha"value="<?php echo $rows['Fecha']; ?>" ></div><br>
    <div><textarea style="height:200px "class="form-control" type="text" name="Noticia"  placeholder="Noticia"><?php echo $rows['Noticia_Desarrollo']; ?></textarea></div><br>
    <div><input type="text" name="Tema" value="<?php echo $rows['Tema']; ?>"></div><br>
    <div><input class="btn btn-primary" type="submit" value="Modificar" name="envio"></div>
</form>
    <?php }   
?>