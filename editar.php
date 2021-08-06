<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicio.css">
    <title>actualizar</title>
</head>
<body>
<div class="col-sm-12">
    <section class="form-register">
    <h4>Actualizar Compra</h4>
    <form action="update.php" method="POST">
    <input class="controls" type="text" name="idcompra" id="idcompra" placeholder="Cod. Compra" value="<?php echo $row['idcompra'] ?>">
    <input class="controls" type="text" name="cod.producto" id="codproducto" placeholder="Cod. Producto" value="<?php echo $row['codproducto'] ?>">
    <input class="controls" type="text" name="nombre_producto" id="nombre_producto" placeholder="Nombre. Producto" value="<?php echo $row['nombre_producto'] ?>">
    <input class="controls" type="text" name="cant_producto" id="cant_producto" placeholder="Cantidad. Producto" value="<?php echo $row['cant_producto'] ?>">
    <input class="controls" type="text" name="precio_producto" id="precio_producto" placeholder="Precio. Producto" value="<?php echo $row['precio_producto'] ?>">
    <input class="controls" type="text" name="dir.envio" id="dir_envio" placeholder="Direccion de Envio" value="<?php echo $row['dir_envio'] ?>">
    
    <input class="botons" type="submit" value="Actualizar datos">
    </form>
</section>
</div>


</body>
</html>
   