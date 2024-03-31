<?php 
#incluir conexion de BD.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';
#Sentencia sql para mostrar los datos almacenados en la DB.
$sentencia = $db->query("SELECT * FROM Evaluaciones");
$dato = $sentencia->fetchALL(PDO::FETCH_OBJ);
#Prueba de reconocimiento de datos con print_r
#print_r($dato);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Evaluaciones</title>
</head>
<body>
    <center>
        <tr>
            <td><a href=""><button>Tabla Alumnos</button></a></td>
            <td><a href=""><button>Tabla ControlesEscritos</button></a></td>
            <td><a href=""><button>Tabla NotasControlesEscritos</button></a></td>
            <td><a href=""><button>Tabla Practicas</button></a></td>
            <td><a href=""><button>Tabla PracticasIndividuales</button></a></td>
            <td><a href=""><button>Tabla Docentes</button></a></td><br>            
        </tr>
        <tr>
            <td><a href=""><button>Tabla PracticasDocentes</button></a></td>
            <td><a href=""><button>Tabla Asignaturas</button></a></td>
            <td><a href=""><button>Tabla Temas</button></a></td>
            <td><a href=""><button>Tabla Evaluaciones</button></a></td>
            <td><a href=""><button>Tabla ExamenTema</button></a></td>
        </tr>
    </center>
    <center>
        <h3>Lista de registros Evaluaciones</h3>
        <a href="insert/formAlumnoInsert.php"><button>Nuevo registro</button></a>
        <table>
            <tr>
                <td>ID Evaluacion</td>
                <td>Tipo</td>
                <td>Fecha</td>
                <td>Asignatura</td>
                <td>Ponderacion Teorico</td>
                <td>Ponderacion Redaccion</td>  
                <td>Ponderacion Laboratorio</td> 
                <td>Ponderacion Tiempo</td>                             
            </tr>
            <!--iniciando el foreach -->
            <?php foreach ($dato as $registro){?>
                <tr>
                    <td><?php echo $registro->IDEvaluacion;?></td>
                    <td><?php echo $registro->Tipo;?></td>
                    <td><?php echo $registro->Fecha;?></td>
                    <td><?php echo $registro->Asignatura;?></td>
                    <td><?php echo $registro->PonderacionTeorico;?></td>
                    <td><?php echo $registro->PonderacionRedaccion;?></td>
                    <td><?php echo $registro->PonderacionLaboratorio;?></td>
                    <td><?php echo $registro->PonderacionTiempo;?></td>
                    <td><a href=""><button>Editar</button></a></td>
                    <td><a href=""><button>Eliminar</button></a></td>
                </tr>
            <!--#finalizando el foreach -->            
            <?php }?>
        </table>
    </center>
</body>
</html>