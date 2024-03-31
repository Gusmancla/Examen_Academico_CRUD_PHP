<?php 
#incluir conexion de BD.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';
#Sentencia sql para mostrar los datos almacenados en la DB.
$sentencia = $db->query("SELECT * FROM Temas");
$dato = $sentencia->fetchALL(PDO::FETCH_OBJ);
#Prueba de reconocimiento de datos con print_r
#print_r($dato);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Temas</title>
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
        <h3>Lista de registros Temas</h3>
        <a href="insert/formAlumnoInsert.php"><button>Nuevo registro</button></a>
        <table>
            <tr>
                <td>ID tema</td>
                <td>Nombre</td>
                <td>Descripción</td>
                <td>Recursos asociados</td>
                <td>Nivel de dificultad</td>                
            </tr>
            <!--iniciando el foreach -->
            <?php foreach ($dato as $registro){?>
                <tr>
                    <td><?php echo $registro->IDTema;?></td>
                    <td><?php echo $registro->Nombre;?></td>
                    <td><?php echo $registro->Descripcion;?></td>
                    <td><?php echo $registro->RecursosAsociados;?></td>
                    <td><?php echo $registro->NivelDificultad;?></td>
                    <td><a href=""><button>Editar</button></a></td>
                    <td><a href=""><button>Eliminar</button></a></td>
                </tr>
            <!--#finalizando el foreach -->            
            <?php }?>
        </table>
    </center>
</body>
</html>