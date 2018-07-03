<!DOCTYPE html>
<html lang="en">

<head>
 <title>XP TRAINING</title>
 <meta charset = "utf-8">
 <link rel="stylesheet" href="font/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

 <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-image">

 <div class="container">
 <form action="functions/registrar-usuario.php" method="post">
 <center>  <h1>REGISTRARSE</h1></center>
<!-- Nombre del usuario-->
<br><label>Nombre:</label><br>
<div class="input-group">
<i class="fas fa-user-circle icons"  aria-hidden="false"></i>
 <input type="text" name="nameuser" placeholder="Nombre" class="form-control">
</div>

<!-- Apellido usuario-->
<label>Apellido:</label><br>
<div class="input-group">
<i class="fas fa-user-circle icons"  aria-hidden="false"></i>
 <input type="text" name="lastnameuser" placeholder="Apellido" class="form-control">
</div>

<!-- cedula usuario-->
<label>Cedula:</label><br>
<div class="input-group">
 <i class="fas fa-id-card icons" aria-hidden="false"></i>
 <input type="text" name="ced" placeholder="Cedula" class="form-control">
</div>

<!-- fecha de nacimiento-->
<label>Fecha de nacimiento:</label><br>
<div class="input-group">
 <i class="fas fa-birthday-cake icons" aria-hidden="false"></i>
 <input name="fecha" type="date"  required class="form-control">
</div>


<!--Carrera-->
<label>Carrera:</label><br>
<div class="input-group">
<i class="fas fa-user-graduate icons" aria-hidden="false"></i>
 <input type="text" name="carrera" placeholder="Carrera" class="form-control">
</div>



<!-- Nombre de usuario-->
<label>Nombre de Usuario:</label><br>
<div class="input-group">
 <i class="fas fa-user icons" aria-hidden="false"></i>
 <input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
</div>

<!--contraseña-->
<label>Contraseña</label><br>
<div class="input-group">
 <i class="fa fa-lock icons" aria-hidden="false"></i>
 <input type="password" name="password" placeholder="Contraseña" class="form-control">
</div>

<!--Palabra clave-->
<label>Palabra clave:</label><br>
<div class="input-group">
 <i class="fas fa-key icons" aria-hidden="false"></i>
 <input type="text" name="keyword" placeholder="Palabra clave" class="form-control">
</div>

<!--privilegios-->
<label>Privilegio:</label><br>
<div class="input-group">
 <select class="form-control" name="rol">
   <option value="">Selecciona un privilegio</option>
   <option value="administrador">Administrador</option>
   <option value="usuario">Usuario</option>
 </select>
</div>
<button type="submit" name="submit" class="btn btn-flat-purple">REGISTRAR</button>
</form>
</div>

</div>
 </body>
</html>