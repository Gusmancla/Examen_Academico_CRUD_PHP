<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla PracticasDocentes</title>
</head>
<body>
    <center>
        <form action="insertPracticasDocentes.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>                
                <tr>
                    <td>Codigo de practica: <input type="number" name="codPract" require></td>
                </tr>
                <tr>
                    <td>DNI Docentes: <input type="number" name="DNIdocen" require></td>
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