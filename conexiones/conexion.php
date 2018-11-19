<?php
    /* Modulo para la conexion con la base de Datos
       Projecto         : UNA - Sigu
       Autor	        : Diomaris Contreras
    */

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $db_host = "localhost";  // Direccion del Servidor
    $db_user = "sigu";       // Usuario
    $db_pass = "Una2018";           // Contraseña
    $db_name = "sigu"; // Base de datos 
 
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) 
            or die(mysql_error());
 
    if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
    }
