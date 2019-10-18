<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>	
<h1>Crear nuevo escritor </h1>
<form class="link-nav"action="crearEscritor.php" method="POST">
	<div><input type="text" name="Nombre"  placeholder="Nombre" required></div><br>
    <div><input type="text" name="Apellido" placeholder="Apellido"required></div><br>
	<div><input type="number" name="Edad" placeholder="Edad"required></div><br>
	<div><input class="btn btn-success" type="submit" value="Crear" name="envio"></div>
</form>
    