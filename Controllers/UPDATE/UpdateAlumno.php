<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAlumno.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$numMatri = $_POST['NumeroDeMatricula'];
$nombre = $_POST['nombre'];
$grupo = $_POST['grupo'];


#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE Alumnos SET NumeroMatricula=?, Nombre=?, Grupo=? WHERE NumeroMatricula=?;");
$resultado = $sentencia->execute([$numMatri,$nombre,$grupo,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAlumno.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}