<?php
session_start();
?>
<?php
/**
 * 
 */
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "xp-training";
$tbl_name = "usuarios";

$username = $_POST['username'];
$keyword = $_POST['keyword'];
$newpass = $_POST['newpass'];

$form_newpass = $_POST['newpass'];

$hash = password_hash($form_newpass, PASSWORD_BCRYPT);

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}



$sql = "SELECT * FROM $tbl_name WHERE username = '$username'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($keyword, $row['keyword'])) {

  $query1 = "UPDATE $tbl_name SET password = '{$hash}' WHERE keyword = '{$keyword}'"; 

 /* $sql1 = "UPDATE $tbl_name SET ";
  $sql1 .=" 'keyword' =  '{$keyword}'";
  $sql1 .= "'password' = '{$newpass}'"; */


    $result1 = $conexion->query($query1);


   echo "Bienvenido! " . $_SESSION['username'];
  /*  echo "<br><br><a href=../Juego/menu.php>Menu principal</a>";*/
    echo "Su contraseña ha sido restablecida exitosamente.";

 } else {
   echo "Username o Keyword estan incorrectos.";

   echo "<br><a href='restablecer.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion);
 ?>