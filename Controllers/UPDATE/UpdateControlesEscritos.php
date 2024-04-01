<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexControlesEscrito.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$IdCon = $_POST['IDcontrol'];
$numMatri = $_POST['NumPreguntas'];
$fech = $_POST['Fecha'];


#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE ControlesEscritos SET IDControl=?, NumeroPreguntas=?, Fecha=? WHERE IDControl=?;");
$resultado = $sentencia->execute([$IdCon,$numMatri,$fech,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexControlesEscrito.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}