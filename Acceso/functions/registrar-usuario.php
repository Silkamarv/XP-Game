
<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "xp-training";
 $tbl_name = "usuarios";

 $form_pass = $_POST['password'];

 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE username = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO usuarios (nombre, apellido, cedula, fnacimiento, carrera, username, password, keyword)
           VALUES ('$_POST[nameuser]','$_POST[lastnameuser]','$_POST[ced]','$_POST[fecha]','$_POST[carrera]','$_POST[username]', '$hash','$_POST[keyword]')";

 if ($conexion->query($query) === TRUE) {

 /* $query1 = "INSERT INTO user_login (idUser, usname, passwrd) SELECT id, username, password FROM user_information"; */
//echo '<script language="javascript">alert("HOLA");</script>';
 echo "<br/>" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4 style='visibility:hidden' id='user'>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='../login.php'>Login</a>" . "</h5>";

 /*?>
<script type="text/javascript" src="alertas/sweetalert.min.js"></script>
<script type="text/javascript" src="alertas/alerta.js"></script>
 <?php
*/
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
   }
 }



 mysqli_close($conexion);
?>
