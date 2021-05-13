<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'skills');
define('DB_PASSWORD', '12345678');
define('DB_DATABASE', 'skills');

$conexio = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($conexio->connect_error) {
    echo "<script>alert('Error al fer la conexió a la base de dades')</script>";
}

return $conexio;

?>