<?php
session_start();
header('location:../login.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XP TRAINING</title>
    <link rel="stylesheet" href="font/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/style.css">
 <link rel="stylesheet" href="tabla.css">
 <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  </head>

  <body class="bg-image">
   <div class="container">
   <br><br>
<hr>
<div class="tituloMenu">
<center>  <h1>XP TRAINING</h1></center>
</div>
<hr>

<center><h1>PERFIL DEL JUGADOR</h1></center>
 <center> 
 

<div class="panel panel-info">

      <div class="panel-body">
      <img src="../img/user.png" alt="avatar" width=128 height=128>



      <h4> 
        <?php
        echo $_SESSION['username'];
        ?> 
      </h4>
      <br>
   
      <h6>puntos</h6><br>
      <h6>nivel</h6>

      </div>
    </div>


<!--

<div class="card bg-light text-dark">
    <div class="card-body" width=200px>
    <img src="../img/user.png" alt="avatar" width=128 height=128>
    </div>
  </div> --> 
  <br>
 <input type="button" class="btn btn-flat-blue" value="CERRAR SESIÓN" onClick="location.href='../functions/logout.php'"/><br>

</center>


</div>
<footer>
    <center>
    <h5>&copy 2018 Universidad Tecnológica de Panamá | Diseñado y desarrollado por: S. Vargas, N. Cano, I. Dominguez, E. Rodriguez, J. Miranda</h6>
    </center>
</footer>
  </body>
</html>
