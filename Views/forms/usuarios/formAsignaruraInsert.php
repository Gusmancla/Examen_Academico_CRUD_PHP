<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Asignatura</title>
</head>
<body>
    <center>
        <form action="insertAsignatura.php" method="post">
            <h2>Ingrese nuevo registro.</h2>
            <table>
                <tr>
                    <td>Codigo de asignatura: <input type="number" name="codigoDeAsignatura" require></td>
                </tr>
                <tr>
                    <td>Nombre: <input type="text" name="nomb" require></td>
                </tr>
                <tr>
                    <td>Descripcion: <input type="text" name="Descrip" require></td>
                </tr>
                <tr>
                    <td>Creditos academicos: <input type="number" name="creditosAcademicos" require></td>
                </tr>
                <tr>
                    <td>Año academico: <input type="number" name="AnioAcademico" require></td>
                </tr>
                <tr>
                    <td>Semestre: <input type="text" name="semes" require></td>
                </tr>
                <tr>
                    <td>Horario de clases: <input type="time" name="horarioDeClases" require></td>
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