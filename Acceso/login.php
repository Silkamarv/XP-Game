<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XP TRAINING</title>
    <link rel="stylesheet" href="font/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

 <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="bg-image">

   <div class="container">

<form action="functions/checklogin.php" method="post" >
<center>  <h1>INICIAR SESION</h1></center>
<hr>
<br><br>
  <!-- Nombre de usuario-->
 
  <div class="input-group">
   <i class="fa fa-user icons" aria-hidden="false"></i>
   <input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
  </div>

  <!--contraseña-->

  <div class="input-group">
   <i class="fa fa-lock icons" aria-hidden="false"></i>
   <input type="password" name="password" placeholder="Contraseña" class="form-control">
  </div>

  <button type="submit" name="submit" class="btn btn-flat-purple">Ingresar</button>
  <br><br>
<hr>
</form>
<a href="registro.php" class="login-link">No tienes cuenta?</a>
</div>
  </body>
</html>