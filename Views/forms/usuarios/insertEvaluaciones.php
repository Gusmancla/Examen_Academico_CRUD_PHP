<?php 
#Prueba de envio de datos.
#print_r($_POST);

#concexion con base datos.
include 'C:\xampp\htdocs\app_crud_ExamenesAcademicos\Models\Entities\conexion.php';

if ($db) {
    if (!isset($_POST['oculto'])) {
    exit(); #En caso de que los datos viajen vacios.
    }    
    #validacion campos del formulario para insertar los registros.
    #Crear nuevas variables y despues poner valor de variables name= de el archivo form_insert.
    $IdEvaluacion=$_POST['idEvaluacion'];
    $tipo=$_POST['tipo'];
    $fecha=$_POST['fecha'];
    $asigna=$_POST['asign'];
    $pondeteori=$_POST['pondeTeo'];
    $poderedac=$_POST['pondeRedac'];
    $pondelab=$_POST['pondeLab'];
    $pondetiem=$_POST['pondeTiem'];    
    
    #Sentencia Sql para insertar registros en la base de datos.
    $sentencia = $db->prepare("INSERT INTO Evaluaciones(IDEvaluacion,Tipo,Fecha,Asignatura,PonderacionTeorico,PonderacionRedaccion,PonderacionLaboratorio,PonderacionTiempo) VALUES (?,?,?,?,?,?,?,?)");
    # ejecuta la sentencia  por medio del resultado por las variables nuevas creadas.
    $resultado = $sentencia->execute([$IdEvaluacion,$tipo,$fecha,$asigna,$pondeteori,$poderedac,$pondelab,$pondetiem]);

    #Validacion de redirección de datos.
    if ($resultado === true) {
        #direccion local de donde se encuentre el index de la tabla.
        header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexEvaluacion.php');
    }else {
        echo '!!!Error al momento de insetar datos¡¡¡';
    }
}else {
    echo '¡¡¡Error en la conexión a la base de datos!!!';
}