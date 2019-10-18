<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php 
    if (isset($_GET['incorrecto'])) {
        echo "Usuario o contraseña son incorrectos";
    }
?>
<div class="login">
<form action="check-login.php" class="form-control" method="post">                           	
    <div class="form-group">									
        <input type="text" class="form-control input-lg" name="Usuario" placeholder="Email" required>        
    </div>							
    <div class="form-group">        
        <input type="password" class="form-control input-lg" name="Password" placeholder="Password" required>       
    </div>								    
        <button type="submit" class="btn btn-success btn-block">Login</button>
</form>
</div>