<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla ControlesEscritos</title>
</head>
<body>
    <center>
        <form action="insertControlesEscritos.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>ID control: <input type="number" name="IDcontrol" require></td>
                </tr>
                <tr>
                    <td>Numero de preguntas: <input type="number" name="NumPreguntas" require></td>
                </tr>
                <tr>
                    <td>Fecha: <input type="date" name="Fecha" require></td>
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