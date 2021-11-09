<?php
 session_start();

   unset($_SESSION['estado']);
   $lista_usuario=$_SESSION['lista_usuario'];
echo 'Principal';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($lista_usuario as $value) {?>
    <h2 ><?php echo $value['nombre'],' ',$value['apellido'] ;?></h2>
  
    <?php } ?>
                    
</body>
</html>
