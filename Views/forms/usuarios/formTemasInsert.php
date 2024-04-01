<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Temas</title>
</head>
<body>
    <center>
        <form action="insertTemas.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>ID tema: <input type="number" name="id" require></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nomb" require></td>
                </tr>
                <tr>
                    <td>Descripción: <input type="text" name="descrip" require></td>
                </tr>
                <tr>
                    <td>Recursos asociados: <input type="text" name="recursosAsociados" require></td>
                </tr>
                <tr>
                    <td>Nivel de dificultad: <input type="text" name="nivelDeDificultad" require></td>
                </tr>                
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset"></td>
                    <td><input type="submit" value="Registar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>