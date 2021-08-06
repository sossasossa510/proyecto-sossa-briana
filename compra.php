<?php
    include ("bd.php");
    $con=conectar();
    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);
   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
    <title>compra</title>
</head>
<body>

<form action="">
    <center> <img id="menu" class="center" src="img/logo2.png" alt="" width="350" height="120" border-radius= "50%" ; ></a>
    

        <br><br>
    
      </form class="uno">
    
      <p class="man">🎨 Venta de materas
pintadas a mano
🍀 Venta de suculentas
✨ Decora tu espacios
🛵 ¡Envíos a todo el país! 🚚
📍 TIENDA VIRTUAL</p>
<br>
<a href="http://localhost/trabajo_final/inicio.php#" class="btn btn-success" width="400px" height="120px" > Inicio </a> </center>

<br><br>
    
      <div class="container mt-5">
      <div class="row">
     
    <div class="col-sm-4">
    <section class="form-register">
        <center>
    <h4>Fiinalizar Compra</h4></center>
    <br>
    <br>
    <br>
    <br>
    <form action="finalizar.php" method="POST">
    <input class="controls" type="text" name="idcompra" id="idcompra" placeholder="Codigo Compra"><br>
    <input class="controls" type="text" name="codproducto" id="codproducto" placeholder="Codigo Producto"><br>
    <input class="controls" type="text" name="nombre_producto" id="nombre_producto" placeholder="Nombre Producto"><br>
   
    <input class="controls" type="text" name="cant_producto" id="cant_producto" placeholder="Cantidad"><br>
    <input class="controls" type="text" name="precio_producto" id="precio_producto" placeholder=" Precio"><br>
    <input class="controls" type="text" name="dir_envio" id="di_renvio" placeholder="Direccion de Envio"><br>
    <br>
    <br>
    <input class="botons" type="submit" value="Finalizar">
    </form>
    <br>
    <form action="tienda.php">
    <input class="botons" type="submit" value="Cancelar">
    </form>
    </section>
    </div>
    
    <div class="col-sm-8">
    <center>
    <h4>Lista De  Compra</h4></center>
    <table class="table">
        <thead class="table-dark table-striped">
            <tr>
                <td>codigo compra</td>
                <td> codigo producto</td>
                <td>Nombre prod.</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>envio</td>

            </tr>

        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_array($query))
              {
                  ?>
                  <tr>
                      <td><?php echo $row['idcompra']?></td>
                      <td><?php echo $row['codproducto']?></td>
                      <td><?php echo $row['nombre_producto']?> </td>
                      
                      <td><?php echo $row['cant_producto']?> </td>
                      <td><?php echo $row['precio_producto']?> </td>
                      <td><?php echo $row['dir_envio']?> </td>
                      <br>
                      
                      <th><a href="actualizar.php ?idcompra=<?php echo $row['idcompra']?>" class="btn btn-primary">editar</a></th>
                      <br>
                      <th><a href="eliminar.php ?idcompra=<?php echo $row['idcompra']?>" class="btn btn-primary">eliminar</a></th>
                  </tr>
                  <?php 
                      }
                  ?>
             
            
             <img src="img/grupo-colorido-suculentas-maceta-naranja-fondo_38561-157.jpg" width="855px" height="450px" alt="">
            
        </tbody>

    </table>

    </div>
 








    </div>
</div>

  
</body>
</html>