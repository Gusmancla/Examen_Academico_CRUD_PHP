<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexNotasControlesEscritos.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$idcon = $_POST['idcontrol'];
$numMat = $_POST['numMatric'];
$not = $_POST['nota'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE NotasControlesEscritos SET IDControl=?, NumeroMatricula=?, Nota=? WHERE IDControl=?;");
$resultado = $sentencia->execute([$idcon,$numMat,$not,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexNotasControlesEscritos.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}