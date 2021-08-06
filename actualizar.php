<?php
   include ("bd.php");
   $con=conectar();
   $IdCompra=$_GET['idcompra'];
   $sql="SELECT * FROM  producto WHERE idcompra='$IdCompra'";
   $query=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($query);
  



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" href="inicia.css">

    <title>actualizar</title>
</head>
<body>
<form action="">
    <center> <img id="menu" class="center" src="img/logo2.png" alt="" width="350" height="120" border-radius= "50%" ; ></a></center>
    

        
    
      </form>
      
    </div>
  </div>
</nav><br><br>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<center>
			
        <p class="man">🎨 Venta de materas
pintadas a mano
🍀 Venta de suculentas
✨ Decora tu espacios
🛵 ¡Envíos a todo el país! 🚚
📍 TIENDA VIRTUAL</p>
<a href="http://localhost/trabajo_final/inicio.php#" class="btn btn-#2980B9"  width="200%" height="120" > Inicio </a> <br><br>
<h2>Actualizar Compra</h2></center>


<br><br>
<div class="col-sm-12">
    <section class="form-register">
       
    <form action="update.php" method="POST">
    <input class="controls" type="text" name="idcompra" id="idcompra" placeholder="Ref Compra" value="<?php echo $row['idcompra'] ?>">
    <br>
    <input class="controls" type="text" name="codproducto" id="codproducto" placeholder="Codigo Producto" value="<?php echo $row['codproducto'] ?>">
    <br>
    <input class="controls" type="text" name="nombre_producto" id="nombre_producto" placeholder="Nombre Producto" value="<?php echo $row['nombre_producto'] ?>">
  <br>
    <input class="controls" type="text" name="cant_producto" id="cant_producto" placeholder="Cantidad" value="<?php echo $row['cant_producto'] ?>">
    <br>
    <input class="controls" type="text" name="precio_producto" id="precio_producto" placeholder=" Precio" value="<?php echo $row['precio_producto'] ?>">
    <br>
    <input class="controls" type="text" name="dir_envio" id="dir_envio" placeholder="Direccion de Envio" value="<?php echo $row['dir_envio'] ?>">
    <br>
    <br>
    <input class="botons" type="submit" value="Actualizar datos">
    </form>
</section>
</div>


</body>
</html>
   