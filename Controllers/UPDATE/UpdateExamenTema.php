<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexExamenTema.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$IDeval = $_POST['idEval'];
$IDTema = $_POST['idTem'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE ExamenTema SET IDEvaluacion=?, IDTema=? WHERE IDEvaluacion=?;");
$resultado = $sentencia->execute([$IDeval,$IDTema,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexExamenTema.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}