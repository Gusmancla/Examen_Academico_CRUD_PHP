<?php
#PRUEBA DE ENVIO DE (DATOS)
#print_r($_GET);

if (!isset($_GET['id'])) {
    # url de la pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexNotasControlesEscritos.php');
}

$EliminarRegistro = $_GET['id'];
#Conecion a la base de datos.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentecia Sql para eliminar registos en la tbla.
$sentencia = $db->prepare("DELETE FROM NotasControlesEscritos WHERE IDControl=?;");
$resultado = $sentencia->execute([$EliminarRegistro]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    # url de la pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexNotasControlesEscritos.php');
} else {
    echo '!!!-ERROR AL ELIMINAR-¡¡¡';
}