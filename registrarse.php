<?php
    include ("bd.php");
    $con=conectar();
    $sql="SELECT * FROM registro";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);

?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="inicio1.css">
    <title>registrarse</title>
</head>
<body>
<center> <img id="menu" class="center" src="img/logo2.png" alt="" width="350" height="120" border-radius= "50%" ; ></a></center>
    
   
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<center>
<div class="container">
<section class="form-register">
    <div class="col-sm-12">
    <h4>Registrar Cliente</h4>
    <form action="registrar.php" method="post">
    
    <input  class="control"  col-12  type="text" name="id" id="id" placeholder="Identificacion"><br><br>
    
    
    <input  class="control"  col-12 type="text" name="usuario" id="usuario" placeholder="Usuario"><br><br>
    
   
    <input  class="control"  col-12 type="password" name="contraseña" id="contraseña" placeholder="Contraseña"><br><br>
    
    
    <input class="botons"  col-6 type="submit" value="Insertar"><br><br>
    

    </form>
    <form action="index.html">
    <input class="botons"  col-6 type="submit" value="Iniciar Sesion">
    <b>
        <br>
    </b>
    </form>
    </div>
    
   
</section>
  
<hr>

<footer id="content"> <center>
 <br>


<p class="footer"  >
 
✨Pequeños detalles con amor 🍀  </p>

<br>
<br>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<a href="https://www.facebook.com/sucu.malu/about" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/sucu.malu/" class="fa fa-instagram"></a>
<a href="https://api.whatsapp.com/send?phone=57314 7732104" class="fa fa-whatsapp"></a>
</center> 


</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
