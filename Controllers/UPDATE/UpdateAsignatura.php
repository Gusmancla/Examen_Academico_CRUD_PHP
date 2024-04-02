<?php
#VERIFICACION DE ENVIO DE DATOS
#print_r($_POST);

#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Validacion de datos no vacios.
if (!isset($_POST['oculto'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAsignatura.php');
}

#variables ACTUALIZADOS
$ID2 = $_POST['id2'];
$codAsig = $_POST['codigoDeAsignatura'];
$nomb = $_POST['nomb'];
$descrip = $_POST['Descrip'];
$credAcad = $_POST['creditosAcademicos'];
$AnioAcad = $_POST['AnioAcademico'];
$sem = $_POST['semes'];
$horaClas = $_POST['horarioDeClases'];

#SQL PARA variables ACTUALIZADOS
$sentencia = $db->prepare("UPDATE Asignaturas SET CodigoAsignatura=?, Nombre=?, Descripcion=? CreditosAcademicos=?, AnioAcademico=?, Semestre=?, HorarioClases=? WHERE CodigoAsignatura=?;");
$resultado = $sentencia->execute([$codAsig,$nomb,$descrip,$credAcad,$AnioAcad,$sem,$horaClas,$ID2]);

#REDIRECCION PARA ACTUALIZACION
if ($resultado === true) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAsignatura.php');
}else{
    echo'ERROR! NO SE PUDIERON ACTUALIZAR LOS NUEVOS REGISTROS';
}
?>