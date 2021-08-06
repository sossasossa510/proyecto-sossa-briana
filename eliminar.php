<?php 
include ('bd.php');
$con=conectar();
$IdCompra=$_GET['idcompra'];

$sql="DELETE FROM producto WHERE idcompra=$IdCompra";
$query=mysqli_query($con,$sql);

if($query)
{
   header("location:compra.php");
}





?>