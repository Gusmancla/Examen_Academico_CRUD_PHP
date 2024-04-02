<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPractica.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$codPrac = $_POST['codigoDePractica'];
$titul = $_POST['Titulo'];
$nivDif = $_POST['nivelDeDificultad'];
$fechIni = $_POST['fechaDeInicio'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE Practicas SET CodigoPractica=?, Titulo=?, NivelDificultad=?, Fecha=? WHERE CodigoPractica=?;");
$resultado = $sentencia->execute([$codPrac,$titul,$nivDif,$fechIni,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPractica.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}