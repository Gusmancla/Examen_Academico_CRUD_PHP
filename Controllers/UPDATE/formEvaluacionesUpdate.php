<?php 
#prueba de envio de datos.
#print_r($_GET);
#Validacion de datos no vacios.
if (!isset ($_GET['id'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexEvaluacion.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentencias sql para mostrar registros en los formularios.
$id =$_GET['id'];
$sentencia = $db->prepare("SELECT * FROM Evaluaciones WHERE IDEvaluacion=?");#cambiar el where por la columna correspondiente.
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
    <title>Tabla Evaluaciones</title>
</head>
<body>
    <center>
        <form action="UpdateEvaluaciones.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>ID Evaluacion: <input type="number" name="idEvaluacion" require value="<?php echo $OBJ->IDEvaluacion; ?>"></td>
                </tr>
                <tr>
                    <td>Tipo: <input type="text" name="tipo" require value="<?php echo $OBJ->Tipo; ?>"></td>
                </tr>
                <tr>
                    <td>Fecha: <input type="date" name="fecha" require value="<?php echo $OBJ->Fecha; ?>"></td>
                </tr>
                <tr>
                    <td>Asignatura: <input type="number" name="asign" require value="<?php echo $OBJ->Asignatura; ?>"></td>
                </tr>
                <tr>
                    <td>Ponderacion Teorico: <input type="number" name="pondeTeo" step="0.1" required value="<?php echo $OBJ->PonderacionTeorico; ?>"></td>
                </tr>
                <tr>
                    <td>Ponderacion Redaccion : <input type="number" name="pondeRedac" step="0.1" required value="<?php echo $OBJ->PonderacionRedaccion; ?>"></td>
                </tr>
                <tr>
                    <td>Ponderacion Laboratorio: <input type="number" name="pondeLab" step="0.1" required value="<?php echo $OBJ->PonderacionLaboratorio; ?>"></td>
                </tr>
                <tr>
                    <td>Ponderacion Tiempo: <input type="time" name="pondeTiem" require value="<?php echo $OBJ->PonderacionTiempo; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $OBJ->IDEvaluacion; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>