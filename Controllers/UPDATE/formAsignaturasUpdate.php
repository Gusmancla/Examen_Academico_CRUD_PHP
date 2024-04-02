<?php 
#prueba de envio de datos.
#print_r($_GET);
#Validacion de datos no vacios.
if (!isset ($_GET['id'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAsignatura.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentencias sql para mostrar registros en los formularios.
$id =$_GET['id'];
$sentencia = $db->prepare("SELECT * FROM Asignaturas WHERE CodigoAsignatura=?");#cambiar el where por la columna correspondiente.
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
    <title>Tabla Asignatura</title>
</head>
<body>
    <center>
        <form action="UpdateAsignatura.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>Codigo de asignatura: <input type="number" name="codigoDeAsignatura" require value="<?php echo $OBJ->CodigoAsignatura; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nomb" require value="<?php echo $OBJ->Nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Descripcion: <input type="text" name="Descrip" require value="<?php echo $OBJ->Descripcion; ?>"></td>
                </tr>
                <tr>
                    <td>Creditos academicos: <input type="number" name="creditosAcademicos" require value="<?php echo $OBJ->CreditosAcademicos; ?>"></td>
                </tr>
                <tr>
                    <td>Año academico: <input type="number" name="AnioAcademico" require value="<?php echo $OBJ->AnioAcademico; ?>"></td>
                </tr>
                <tr>
                    <td>Semestre: <input type="text" name="semes" require value="<?php echo $OBJ->Semestre; ?>"></td>
                </tr>
                <tr>
                    <td>Horario de clases: <input type="time" name="horarioDeClases" require value="<?php echo $OBJ->HorarioClases; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $OBJ->CodigoAsignatura; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>