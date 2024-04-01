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
    $NumMatricula=$_POST['NumeroDeMatricula'];
    $Nombre=$_POST['nombre'];
    $Grupo=$_POST['grupo'];

    #Sentencia Sql para insertar registros en la base de datos.
    $sentencia = $db->prepare("INSERT INTO Alumnos(NumeroMatricula,Nombre,Grupo) VALUES (?,?,?)");
    $resultado = $sentencia->execute([$NumMatricula,$Nombre,$Grupo]);

    #Validacion de redirección de datos.
    if ($resultado === true) {
        header('Location: http://localhost/app_crud_ExamenesAcademicos/Models/Entities/indexAlumno.php');
    }else {
        echo '!!!Error al momento de insetar datos¡¡¡';
    }
}else {
    echo '¡¡¡Error en la conexión a la base de datos!!!';
}



?>