<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Practica</title>
</head>
<body>
    <center>
        <form action="insertPractica.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>Codigo de practica: <input type="number" name="codigoDePractica" require></td>
                </tr>
                <tr>
                    <td>Titulo: <input type="text" name="Titulo" require></td>
                </tr>
                <tr>
                    <td>Nivel de dificultad: <input type="text" name="nivelDeDificultad" require></td>
                </tr>
                <tr>
                    <td>Fecha de inicio: <input type="date" name="fechaDeInicio" require></td>
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