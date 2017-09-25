<?php


function Connect()
{
 $dbhost = getenv("DB_HOST");
 $dbuser = getenv("DB_USER");
 $dbpass = getenv("DB_PASS");
 $dbname = getenv("DB_NAME");

 // Crear una conexion
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}

?>
