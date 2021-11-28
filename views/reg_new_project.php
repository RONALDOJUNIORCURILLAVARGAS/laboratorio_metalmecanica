<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">

    <link href="../src/styles/reg_proyecto.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../src/javascript/inicio.js"></script>

</head>
<body>
    <?php
     include './cabecera.php';
    ?>
    <div class="container" >
        <br>
        <div class="container text-center" id="titulo_reg_pro" style="background-color:none; ">
        	<div>
        		 <h1 style="color: black;">Registrar Proyecto</h1>
        	</div> 
        </div>
        <div id="caja_registro">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nombre de proyecto</label>
            </div>
            <div id="btn_reg" class="text-center">
                    <button id="btn_reg_proyecto" >Registrar</button>
            </div>
        </div>

    </div>

</body>
</html>