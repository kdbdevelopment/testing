<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
?>
<head> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


</head>
<a style="float:right" href="cerrar-session.php"><span class="glyphicon glyphicon-log-out"></span>Cerrar sesión</a>
<table class="table table-hover table" border="3" width="1000">
    <tr>
        <td><strong> Nombre </strong></td>
        <td> <strong>Apellido</strong></td>
        <td> <strong>Edad</strong></td>
        <td> <strong>Ultima Publicación</strong></td>
        <td> <strong>Cantidad de Publicaciones</strong></td>
        <td> <strong>Noticias</strong></td>
        <td style="background-color:blue"> <strong>Modificar escritor</strong></td>
        <td style="background-color:red"> <strong>Eliminar escritor</strong></td>
    </tr>


<?php
    require 'conexion.php';
    
$sql = "SELECT t1.*, MAX(t2.`Fecha`), COUNT(t2.`Id_Noticia`) FROM escritores t1 
        LEFT JOIN noticias t2 ON t1.`Id_Escritor` = t2.`Id_Escritor` GROUP BY t1.`Id_Escritor`";
$resultado = $con->query($sql);
    
    foreach ($resultado as $rows) { ?>
          <tr>
        <td><?=$rows["Nombre"];?></td>
        <td><?=$rows["Apellido"];?></td>
        <td><?=$rows["Edad"];?></td>
        <td><?=$rows["MAX(t2.`Fecha`)"];?></td>
        <td><?=$rows["COUNT(t2.`Id_Noticia`)"];?></td>
        <td><a href="noticiasEscritor.php?id=<?php echo $rows["Id_Escritor"]; ?>"> Noticias de <?php echo $rows["Nombre"]; ?> </a> </td>
        <td><a href="modificarEscritor.php?idmodificar=<?php echo $rows["Id_Escritor"]; ?>  "> <span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="eliminarEscritor.php?idborrar=<?php echo $rows["Id_Escritor"]; ?>  "> <span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
		
        
        
        <?php } ?>
        </table>
        <br>
        <a  class="btn btn-success " href="hrefCrearEscritor.php"> Agregar nuevo escritor </a>
        
        <br>
        <h1> Crear nueva noticia:  </h1><br>    
        <form class="form-group" action="crearNoticia.php" method="POST">
	<div><input type="text" name="Titulo" placeholder="Título" required></div> <br>
	<div><textarea type="text" name="Subtitulo"  placeholder="Subtítulo"required></textarea></div><br>
	<div><input type="date" name="Fecha"  placeholder="Fecha"required></div><br>
    <div><textarea class="form-control" type="text" name="Noticia"  placeholder="Noticia"required></textarea></div><br>
    <div><input type="text" name="Tema" placeholder="Tema"required></div><br>
    
    <select class="browser-default custom-select custom-select-lg mb-3" name="Escritores"> 
    <?php 
     
    $resultado = $con->query($sql);
    
     foreach ($resultado as $rows)
     echo '<option value="'.$rows["Id_Escritor"].'">'.$rows["Nombre"]. ' ' .$rows["Apellido"].'</option> ';
     ?>
    </select>
     
    <div><input class="btn btn-success" style="margin-top:20px" type="submit" value="Crear" name="envio"></div>
   
        

	
</form>
