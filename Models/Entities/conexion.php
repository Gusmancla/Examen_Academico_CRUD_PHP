<?php
#propiedades de host
$pass = '';
$user = 'root';
$namedb = 'ExamenAcademicosdb';

try {
    $db = new PDO(
        'mysql:host=localhost;dbname='.$namedb,$user,$pass
    );
} catch (Execption $error) {
    echo 'Error de conexion'.$error->getMessage();
    die();
}