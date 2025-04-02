<?php
    $servername="localhost";
    $database="bdventadepurificadores";
    $username="root";
    $password="";
    $port=3307;
    $conn= mysqli_connect($servername,$username,$password,$database,$port);
    if($conn->connect_error)
   { die("error en la conexion". $conn->connect_error);}
else{
echo" conexion exitosa";}
?>