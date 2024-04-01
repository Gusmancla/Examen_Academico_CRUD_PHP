<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla ExamenTema</title>
</head>
<body>
    <center>
        <form action="insertExamenTema.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>                
                <tr>
                    <td>ID Evaluaciones: <input type="number" name="idEval" require></td>
                </tr>
                <tr>
                    <td>ID Tema: <input type="number" name="idTem" require></td>
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