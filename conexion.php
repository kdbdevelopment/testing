<?php
$hostname = 'localhost';
$database = 'gestor_noticias';
$username = 'root';
$password = '';

    try {
        $con=new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
        //echo"Conexion exitosa";
    }
    catch(PDOExeption $e){
        print "¡Error!: ".$e->getMessage();
        die();
    }
?>
