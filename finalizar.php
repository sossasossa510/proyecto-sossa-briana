<?php
    include ("bd.php");
    $con = conectar();

    /* debo declarar una variable por cada campo de la tabla*/

   
    $IdCompra = $_POST['idcompra'];
    $NomProducto = $_POST['codproducto'];
    $Categoria= $_POST['nombre_producto'];
    $Cantidad=$_POST['cant_producto'];
    $Precio=$_POST['precio_producto'];
    $Envio=$_POST['dir_envio'];
    
    

    $sql="INSERT INTO`producto` VALUES( '$IdCompra', '$NomProducto','$Categoria','$Cantidad','$Precio','$Envio')";
    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("location:compra.php");
    }
?>