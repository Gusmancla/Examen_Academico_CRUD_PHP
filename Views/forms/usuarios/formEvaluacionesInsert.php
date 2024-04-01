<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Evaluaciones</title>
</head>
<body>
    <center>
        <form action="insertEvaluaciones.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>ID Evaluacion: <input type="number" name="idEvaluacion" require></td>
                </tr>
                <tr>
                    <td>Tipo: <input type="text" name="tipo" require></td>
                </tr>
                <tr>
                    <td>Fecha: <input type="date" name="fecha" require></td>
                </tr>
                <tr>
                    <td>Asignatura: <input type="number" name="asign" require></td>
                </tr>
                <tr>
                    <td>Ponderacion Teorico: <input type="number" name="pondeTeo" step="0.1" required></td>
                </tr>
                <tr>
                    <td>Ponderacion Redaccion : <input type="number" name="pondeRedac" step="0.1" required></td>
                </tr>
                <tr>
                    <td>Ponderacion Laboratorio: <input type="number" name="pondeLab" step="0.1" required></td>
                </tr>
                <tr>
                    <td>Ponderacion Tiempo: <input type="time" name="pondeTiem" require></td>
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