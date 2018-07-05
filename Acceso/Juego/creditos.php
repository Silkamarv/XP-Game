<?php
session_start();
header('location:../login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
</head>
<body class="bg-image">
 
<div class="container">
<br><br>
<hr>
<div class="tituloMenu">
<center>  <h1>XP TRAINING</h1></center>
</div>
<hr>
<br>
<center><h1>CRÉDITOS</h1></center>


<div class="row">


  <div class="col-sm-3">
  <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/utp.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Universidad Tecnológica de Panamá</h4>

    </div>
  </div>
  </div>

    <div class="col-sm-3">
  <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/fisc.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Facultad de Ingenieria en Sistemas Computacionales</h5>

    </div>
  </div>
  </div>

  <div class="col-sm-3">
  <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/nisla.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Nisla Cano</h4>
      <p class="card-text">Lic. en Desarrollo de Software</p>
    </div>
  </div>
  </div>

  <div class="col-sm-3">

  <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/silkamar.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Silkamar Vargas</h4>
      <p class="card-text">Lic. en Desarrollo de Software</p>
    </div>
  </div>
  
  </div>
  </div>


  <div class="row">
<div class="col-sm-3">
    <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/irving.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Irving Dominguez</h4>
      <p class="card-text">Lic. en Desarrollo de Software</p>
    </div>
  </div>
  </div>
  

  <div class="col-sm-3">
    <div class="card" style="width:200px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Joseph Miranda</h4>
      <p class="card-text">Lic. en Desarrollo de Software</p>
    </div>
  </div>
  </div>
  

  <div class="col-sm-3">
    <div class="card" style="width:200px">
    <img class="card-img-top" src="../img/eric.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Eric Rodriguez</h4>
      <p class="card-text">Lic. en Desarrollo de Software</p>
    </div>
  </div>
  </div>
  <br>

</div>
<center>
<input type="button" class="btn btn-flat-blue" value="VOLVER AL MENÚ PRINCIPAL" onClick="location.href='../Juego/menu.php'"/><br>
</center>
</div>
<footer>
    <center>
    <h5>&copy 2018 Universidad Tecnológica de Panamá | Diseñado y desarrollado por: S. Vargas, N. Cano, I. Dominguez, E. Rodriguez, J. Miranda</h6>
    </center>
</footer>
</body>
</html>