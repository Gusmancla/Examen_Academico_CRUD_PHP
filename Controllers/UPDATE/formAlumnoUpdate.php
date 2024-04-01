<?php 
#prueba de envio de datos.
#print_r($_GET);
#Validacion de datos no vacios.
if (!isset ($_GET['id'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAlumno.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentencias sql para mostrar registros en los formularios.
$id =$_GET['id'];
$sentencia = $db->prepare("SELECT * FROM Alumnos WHERE NumeroMatricula=?");#cambiar el where por la columna correspondiente.
$resultado = $sentencia->execute([$id]);
$OBJ = $sentencia->fetch(PDO::FETCH_OBJ);
#prueba
#print_r($OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Alumno</title>
</head>
<body>
    <center>
        <!-- cambiar el action por cada tabla x con cada archico Update_.php-->
        <form action="UpdateAlumno.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <!--En la variable varia value el objeto llama el campo de dicha tabla x respecto a inde_.php-->
                    <td>Numero de matricula: <input type="number" name="NumeroDeMatricula" require value="<?php echo $OBJ->NumeroMatricula; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nombre" require value="<?php echo $OBJ->Nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Grupo: <input type="text" name="grupo" require value="<?php echo $OBJ->Grupo; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $OBJ->NumeroMatricula; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>