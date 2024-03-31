<?php 
#incluir conexion de BD.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';
#Sentencia sql para mostrar los datos almacenados en la DB.
$sentencia = $db->query("SELECT * FROM Alumnos");
$dato = $sentencia->fetchALL(PDO::FETCH_OBJ);
#Prueba de reconocimiento de datos con print_r
#print_r($dato);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Alumno</title>
</head>
<body>
    <center>
        <h3>Lista de registros alumnos</h3>
        <a href="insert/formAlumnoInsert.php"><button>Nuevo registro</button></a>
        <table>
            <tr>
                <td>Numero de matricula</td>
                <td>Nombre</td>
                <td>Grupo</td>                
            </tr>
            <!--iniciando el foreach -->
            <?php foreach ($dato as $registro){?>
                <tr>
                    <td><?php echo $registro->NumeroMatricula;?></td>
                    <td><?php echo $registro->Nombre;?></td>
                    <td><?php echo $registro->Grupo;?></td>
                    <td><a href="UPDATE/formAlumnoUpdate.php"><button>Editar</button></a></td>
                    <td><a href="DELETE/deleteAlumno.php"><button>Eliminar</button></a></td>
                </tr>
            <!--#finalizando el foreach -->            
            <?php }?>
        </table>
    </center>
</body>
</html>