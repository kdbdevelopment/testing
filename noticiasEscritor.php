<head>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: login.php');
    }
require 'conexion.php';
$id = $_GET['id'];


$sql = "SELECT * FROM noticias t1 INNER JOIN escritores t2 ON t1.Id_Escritor = t2.Id_Escritor WHERE t2.Id_Escritor = '$id' ORDER BY t1.Fecha DESC" ;
        $resultado = $con->query($sql);
      
    ?>    
    <table class="table table-hover table" border="3" width="1100">
    <tr>
        <td> <strong> Título </strong></td>
        <td> <strong>Subtítulo</strong></td>
        <td> <strong>Fecha</strong></td>
        <td> <strong>Noticia</strong></td>
        <td> <strong>Tema</strong></td>
        <td style="background-color:blue"><strong>Modificar</strong> </td>
        <td style="background-color:red"><strong>Eliminar</strong></td>
        </tr>
        <?php

        
        foreach ($resultado as $rows) { 
          
        ?>
        <tr>
        <td><?=$rows["Titulo"];?></td>
        <td><?=$rows["Subtitulo"];?></td>
        <td><?=$rows["Fecha"];?></td>
        <td><?=$rows["Noticia_Desarrollo"];?></td>
        <td><?=$rows["Tema"];?></td>
        <td><a href="modificarNoticia.php?idmodificar=<?php echo $rows["Id_Noticia"]; ?>"> <span class="glyphicon glyphicon-pencil"></a></td>
        <td><a href="eliminarNoticia.php?idborrar=<?php echo $rows["Id_Noticia"]; ?>  "> <span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
       <?php }
 

       ?>
        </table>
        
        

        
    
         