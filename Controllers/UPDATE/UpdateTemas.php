<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexTemas.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$id = $_POST['id'];
$nombre = $_POST['nomb'];
$desc = $_POST['descrip'];
$recAsoc = $_POST['recursosAsociados'];
$nivelDif = $_POST['nivelDeDificultad'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE Temas SET IDTema=?, Nombre=?, Descripcion=?, RecursosAsociados=?, NivelDificultad=? WHERE IDTema=?;");
$resultado = $sentencia->execute([$id,$nombre,$desc,$recAsoc,$nivelDif,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexTemas.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}