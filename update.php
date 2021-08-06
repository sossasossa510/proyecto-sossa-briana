<?php
include ("bd.php");
$con=conectar();

    $IdCompra = $_POST['idcompra'];
    $cod_producto = $_POST['codproducto'];
    $nombre_producto= $_POST['nombre_producto'];
    $cantidad_producto=$_POST['cant_producto'];
    $precio_producto=$_POST['precio_producto'];
    $Envio=$_POST['dir_envio'];

    $sql="UPDATE producto SET codproducto='  $cod_producto',nombre_producto=' $nombre_producto',cant_producto='$cantidad_producto',precio_producto=' $precio_producto',
    dir_envio=' $Envio' WHERE idcompra='$IdCompra'";

    $query=mysqli_query($con,$sql);

    if($query)
    {
        header('location:compra.php');
    }




?>