<?php
 include_once "conexion.php";
 $sql="SELECT * FROM USUARIO";
 $result=mysqli_query($conn,$sql);
 //var_dump($result);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <form action="reportedeusuario.php" method="post">
     <h1>reporte de usuario</h1>
     <table border="2">
         <thead>
             <tr>
                 <th>id</th>
                 <th>nombre</th>
                 <th>correoelectronico</th>
                 <th>telefono</th>
                 <th>idpermiso</th>
             </tr>
         </thead>
         <tbody>
             <?php
             while($row=mysqli_fetch_array($result))
             {
                 ?>
                 <tr>
                     <td><?=$row['ID'];?></td>
                     <td><?=$row['NOMBRE'];?></td>
                     <td><?=$row['EMAIL'];?></td>
                     <td><?=$row['TELEFONO'];?></td>
                     <td><?=$row['IDPERMISO'];?></td>
                    
                 </tr>
                 <?php
             }
             ?>
         </tbody>
     </table>
 </body>
 </html>