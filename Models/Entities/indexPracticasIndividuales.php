<?php 
#incluir conexion de BD.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';
#Sentencia sql para mostrar los datos almacenados en la DB.
$sentencia = $db->query("SELECT * FROM PracticasIndividuales");
$dato = $sentencia->fetchALL(PDO::FETCH_OBJ);
#Prueba de reconocimiento de datos con print_r
#print_r($dato);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla PracticasIndividuales</title>
</head>
<body>
    <center>
        <tr>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAlumno.php"><button>Tabla Alumnos</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexControlesEscrito.php"><button>Tabla ControlesEscritos</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexNotasControlesEscritos.php"><button>Tabla NotasControlesEscritos</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPractica.php"><button>Tabla Practicas</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPracticasIndividuales.php"><button>Tabla PracticasIndividuales</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexDocente.php"><button>Tabla Docentes</button></a></td><br>            
        </tr>
        <tr>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexPracticasDocentes.php"><button>Tabla PracticasDocentes</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAsignatura.php"><button>Tabla Asignaturas</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexTemas.php"><button>Tabla Temas</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexEvaluacion.php"><button>Tabla Evaluaciones</button></a></td>
            <td><a href="http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexExamenTema.php"><button>Tabla ExamenTema</button></a></td>
        </tr>
    </center>
    <center>
        <h3>Lista de registros PracticasIndividuales</h3>
        <a href="/app_crud_ExamenesAcademicos/Views/forms/usuarios/formPracticasIndividualesInsert.php"><button>Nuevo registro</button></a>
        <table>
            <tr>
                <td>Codigo de practica</td>
                <td>Numero de matricula</td>
                <td>Nota</td>                                            
            </tr>
            <!--iniciando el foreach -->
            <?php foreach ($dato as $registro){?>
                <tr>
                    <td><?php echo $registro->CodigoPractica;?></td>
                    <td><?php echo $registro->NumeroMatricula;?></td>
                    <td><?php echo $registro->Nota;?></td>                    
                    <td><a href=""><button>Editar</button></a></td>
                    <td><a href=""><button>Eliminar</button></a></td>
                </tr>
            <!--#finalizando el foreach -->            
            <?php }?>
        </table>
    </center>
</body>
</html>