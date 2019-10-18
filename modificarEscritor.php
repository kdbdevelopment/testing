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
$sql = "SELECT * FROM escritores WHERE Id_Escritor = '$id'";
$resultado = $con->query($sql);

foreach ($resultado as $rows) { ?>
<h1> Modificar Escritor </h1>
<form class="link-nav" action="updatearEscritor.php" method="POST">
<div><input type="hidden" name="Id_Escritor"  value="<?php echo $rows['Id_Escritor']; ?>" /></div> <br>
<div><input type="text" name="Nombre"  value="<?php echo $rows['Nombre']; ?>" /></div> <br>
	<div><input type="text" name="Apellido"value="<?php echo $rows['Apellido']; ?>" ></div><br>
    <div><input type="text" name="Edad" value="<?php echo $rows['Edad']; ?>"></div><br>
    <div><input class="btn btn-primary" type="submit" value="Modificar" name="envio"></div>
</form>
    <?php }   
?>