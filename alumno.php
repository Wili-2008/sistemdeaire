
<?php
//echo "me enviaste datos  ";
//var_dump($_POST);
//echo "<br> bienvenida " .$_POST["nombre"];
include_once "conexion.php";
$nombre="";
$telefono='';
$password='';
$IDPERMISO=0;
$email='';
if(!empty ($_POST)){
    if(empty($_POST["nombre"]))
     echo"los datos del nombre es obligatorio ". "<br>";
    else 
    $nombre = $_POST["nombre"];

    if(empty($_POST["email"]))
    echo"los datos del email es obligatorio ". "<br>";
   else 
   $email = $_POST["email"];
         

     if (empty($_POST["telefono"]))
     echo"el telefono es oligatorio". "<br>";
    else
    $telefono = $_POST["telefono"];
     
    if (empty($_POST["password"]))
     echo"password es oligatorio". "<br>";
    else
    $password = $_POST["password"];
    
    if (empty($_POST["IDPERMISO"]))
    echo"IDPERMISO es oligatorio". "<br>";
   else
   $IDPERMISO = $_POST["IDPERMISO"];
   

$sql="INSERT INTO USUARIO(NOMBRE, EMAIL,PASSWORD,TELEFONO,IDPERMISO)";
$sql=$sql . "VALUES('$nombre','$email','$password', '$telefono', $IDPERMISO)";
$queryResult=mysqli_query($conn,$sql);
header('location:reportedeusuario');

} 
else {
    echo" error al recibir datos";
}
?>
