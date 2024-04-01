<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla PracticasIndividuales</title>
</head>
<body>
    <center>
        <form action="insertPracticasIndividuales.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>                
                <tr>
                    <td>Codigo de practica: <input type="number" name="codPract" require></td>
                </tr>
                <tr>
                    <td>Numero de matricula: <input type="number" name="numMatric" require></td>
                </tr>
                <tr>
                    <td>Nota: <input type="number" name="nota" step="0.1" required></td>
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