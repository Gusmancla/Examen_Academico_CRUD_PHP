<?php 
#prueba de envio de datos.
#print_r($_GET);
#Validacion de datos no vacios.
if (!isset ($_GET['id'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPractica.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentencias sql para mostrar registros en los formularios.
$id =$_GET['id'];
$sentencia = $db->prepare("SELECT * FROM Practicas WHERE CodigoPractica=?");#cambiar el where por la columna correspondiente.
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
    <title>Tabla Practica</title>
</head>
<body>
    <center>
        <form action="UpdatePractica.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>Codigo de practica: <input type="number" name="codigoDePractica" require value="<?php echo $OBJ->CodigoPractica; ?>"></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="Titulo" require value="<?php echo $OBJ->Titulo; ?>"></td>
                </tr>
                <tr>
                    <td>Nivel de dificultad: <input type="text" name="nivelDeDificultad" require value="<?php echo $OBJ->NivelDificultad; ?>"></td>
                </tr>
                <tr>
                    <td>Fecha de inicio: <input type="date" name="fechaDeInicio" require value="<?php echo $OBJ->Fecha; ?>"></td>
                </tr>
                <tr>
                <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $OBJ->CodigoPractica; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>