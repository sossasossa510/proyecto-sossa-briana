<?php
    include ("bd.php");
    $con = conectar();

    /* debo declarar una variable por cada campo de la tabla*/

   
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $telefono= $_POST['telefono'];
    $mensaje= $_POST['mensaje'];
    
    

    $sql="INSERT INTO`contactos` VALUES(' $nombre','$correo', '$telefono','$mensaje')";
    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("location:contacto.php");
    }
?>