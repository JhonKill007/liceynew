<?php

$ruta= '../img/'.$_FILES['foto']['name'];
$ruta_send= 'img/'.$_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$ruta);

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = getdate();



if(!empty($ruta) || !empty($titulo) || !empty($fecha) || !empty($descripcion)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword =  "";
    $dbname = "dbg4licey20198776";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


    if($conn){
        $INSERT = "INSERT INTO noticias (titulo,descripcion,foto,fecha)values('$titulo','$descripcion','$ruta_send','$fecha')";
        $resultado = mysqli_query($conn,$INSERT);
        if($resultado){
            echo "registrado";
            header("Location: ../index.php");
        }
        else{
            echo "valio verga";
        }
    }
    else{
        echo "la connecion fallo";
    }
}
else{
    echo "todos los datos son OBLIGATORIOS";
    header("Location: agregar.php");
}
?>