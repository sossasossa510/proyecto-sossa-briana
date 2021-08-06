<?php
    include ("bd.php");
    $con=conectar();
    $sql="SELECT * FROM contactos";
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
    <title>contacto</title>
</head>
<body>


<div class="container">
    <div class="row">
      <div class="col-sm-6">
      <form action="">
    <img id="menu" class="center" src="img/logo2.png" alt="" width="300" height="100" border-radius= "50%" ; ></a>
    

        
    
      </form>
     

      <br><br>
      <h1 >Contactanos sucumalu</h1>


     
<br><br>
      <br>
      <br>

      <p>✨Pequeños detalles Con Amor</p>
      <br>
      <br>
      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      
      <a href="https://www.facebook.com/sucu.malu/about" class="fa fa-facebook"  ></a>
<a href="https://www.instagram.com/sucu.malu/" class="fa fa-instagram " ></a>
<a href="https://api.whatsapp.com/send?phone=57314 7732104" class="fa fa-whatsapp"  ></a>
<br><br>
<br><br>
    <div  class="desarrollo">
      <P>Desarrolladores</P>
      <p>Jhoana Sossa Cordoba</p>
      <p>Briana Rivera</p>
      </div>
      <BR></BR>

     
      </div>
      <br><br>
      <div class="col-sm-6">
      <form action="enviar.php" method="POST">


      <center><h2>Ingresar Datos</h2>
      <br>
      <b>

      
      
      <img src="img/suculenta.jpg" alt="" width="100%" class="img"></center>
      <br><br>
   
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre ">
    <br>
    <input class="controls" type="text" name="email" id="email" placeholder="Email">
    <br>
    <input class="controls" type="text" name="telefono" id="telefono" placeholder="Telefono o Celular">
    <br>
    <input class="controls" type="text" name="mensaje" id="mensaje" placeholder="Mensaje" 
    >
    <br>
    
    <input class="botons btn btn-success" type="submit" value="Enviar">
    

    </form>
      </div>

</div>



</div>
</body>
</html>