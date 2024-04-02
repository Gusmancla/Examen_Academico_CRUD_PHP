<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexEvaluacion.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$idEva = $_POST['idEvaluacion'];
$tipo = $_POST['tipo'];
$fech = $_POST['fecha'];
$asigna = $_POST['asign'];
$ponderaT = $_POST['pondeTeo'];
$ponderaR = $_POST['pondeRedac'];
$ponderaL = $_POST['pondeLab'];
$ponderaTi = $_POST['pondeTiem'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE Evaluaciones SET IDEvaluacion=?, Tipo=?, Fecha=?, Asignatura=?, PonderacionTeorico=?, PonderacionRedaccion=?, PonderacionLaboratorio=?, PonderacionTiempo=? WHERE IDEvaluacion=?;");
$resultado = $sentencia->execute([$idEva,$tipo,$fech,$asigna,$ponderaT,$ponderaR,$ponderaL,$ponderaTi,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexEvaluacion.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}