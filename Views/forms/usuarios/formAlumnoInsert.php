<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Alumno</title>
</head>
<body>
    <center>
        <form action="insertAlumno.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>Numero de matricula: <input type="number" name="NumeroDeMatricula" require></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nombre" require></td>
                </tr>
                <tr>
                    <td>Grupo: <input type="text" name="grupo" require></td>
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