<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../src/styles/modulos.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    <title>Document</title>
</head>
<body>
   
     <?php
     include './cabecera.php';
     ?>
     <div id="container">
        <div class="herramientas">
            <span id="title_herramientas">Herramientas</span>
            <ul id="herramienta_li">
                <li class="caja_h">
                    <img src="../src/images/herramientas/cortatubos.png" class="img_herramientas"/>
                        Cortatubos
                </li>
                <li class="caja_h">
                    <img src="../src/images/herramientas/dobladora de tubos.png" class="img_herramientas"/> 
                        Dobladora
                </li>
            </ul>
            <span id="title_herramientas">Materiales</span>
            <div id="material">
                <img src="../src/images/herramientas/tubos_metal.png" class="class_material" />
                Tubos metálicos
            </div>

        </div>
        <div class="simulador">
            <div id="title_simulador">
                <span>Corte de tubería</span>
            </div>
            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>
            <div id="run_simulador">

            </div>
            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>
        </div>
        <div class="vl"></div>
        <div class="configurar">
            <span id="title_config">Material seleccionado: <span style="font-weight: bold;"> Tubos metálicos</span></span>
            <div id="tabla_data">
                    <table id="tb_d">
                        <tr class="tb_filas">
                            <td>Dimensiones</td>
                            <td>Valor</td>
                            <td>Unidad</td>
                        </tr>
                        <tr class="tb_filas">
                            <td>Largo</td>
                            <td><input type="number" value="30"/></td>
                            <td>
                                <select class="btn btn-secondary " role="group" aria-labelledby="btnGroupDrop1">
                                    <option class="dropdown-item" value="1">cm</option> 
                                    <option class="dropdown-item" value="2">m</option> 
                                </select>
                            </td>
                        </tr>
                        <tr class="tb_filas">
                            <td>Diametro</td>
                            <td><input type="number" value="1"/></td>
                            <td>
                                <select class=" btn btn-secondary " role="group" aria-labelledby="btnGroupDrop1">
                                    <option class="dropdown-item" value="1">cm</option> 
                                    <option class="dropdown-item" value="2">m</option> 
                                </select>
                            </td>
                        </tr>
                        <tr class="tb_filas">
                            <td>Grosor</td>
                            <td><input type="number" value="16"/></td>
                            <td>
                                <select class="btn btn-secondary " role="group" aria-labelledby="btnGroupDrop1">
                                    <option class="dropdown-item" value="1">mm</option> 
                                    <option class="dropdown-item" value="2">cm</option> 
                                    <option class="dropdown-item" value="3">m</option> 
                                </select>
                            </td>
                        </tr>
                    </table>
                    
            </div>
            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>
            <span id="title_config">Herramienta seleccionada: </span>


            <div  id="mensaje_h_null" align="center" >
                <span id="mensaje_herramienta_null">Ninguna</span><br>
                <span id="m_h_content">Por favor seleccione una herramienta!!</span>
            </div>


        </div>
     </div>
     
    
    

</body>
</html>