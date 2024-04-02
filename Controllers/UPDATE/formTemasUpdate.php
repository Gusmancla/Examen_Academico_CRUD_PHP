<?php 
#prueba de envio de datos.
#print_r($_GET);
#Validacion de datos no vacios.
if (!isset ($_GET['id'])) {
    # url dela pagina de inicio de la tabla x respecto al index_.php
    header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexTemas.php');
}
#CONEXION A LA BASE DE DATOS
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

#Sentencias sql para mostrar registros en los formularios.
$id =$_GET['id'];
$sentencia = $db->prepare("SELECT * FROM Temas WHERE IDTema=?");#cambiar el where por la columna correspondiente.
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
    <title>Tabla Temas</title>
</head>
<body>
    <center>
        <form action="UpdateTemas.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>ID tema: <input type="number" name="id" require value="<?php echo $OBJ->IDTema; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nomb" require value="<?php echo $OBJ->Nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Descripción: <input type="text" name="descrip" require value="<?php echo $OBJ->Descripcion; ?>"></td>
                </tr>
                <tr>
                    <td>Recursos asociados: <input type="text" name="recursosAsociados" require value="<?php echo $OBJ->RecursosAsociados; ?>"></td>
                </tr>
                <tr>
                    <td>Nivel de dificultad: <input type="text" name="nivelDeDificultad" require value="<?php echo $OBJ->NivelDificultad; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $OBJ->IDTema; ?>">
                    <td colspan="2"><input type="submit" value="Guardar"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>