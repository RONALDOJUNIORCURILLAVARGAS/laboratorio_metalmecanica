<?php
 session_start();
 if(isset($_SESSION['estado']))
 {
    $lista_usuario=$_SESSION['lista_usuario'];

    if(isset($_SESSION['lista_proyectos'])){
      $lista_proyectos=$_SESSION['lista_proyectos'];
    }

    if(isset( $_SESSION['lista_herramienta'])){
        $lista_herramienta=$_SESSION['lista_herramienta'];
      }
      if(isset( $_SESSION['lista_materiales'])){
        $lista_material=$_SESSION['lista_materiales'];
      }
      if (isset($_SESSION['lista_dimensiones'])) {
        $lista_dimensiones=$_SESSION['lista_dimensiones'];   
      }
      if(isset($_SESSION['lista_configherramienta'])){
          $lista_configherramienta=$_SESSION['lista_configherramienta'];
      }
      if(isset($_SESSION['nombre_herramienta_seleccionado'])){
        $nombreherramientaseleccionada=$_SESSION['nombre_herramienta_seleccionado'];
      }


      if(isset($_SESSION['nombre_material_seleccionado'])){
          $nombrematerialseleccionado=$_SESSION['nombre_material_seleccionado'];
      }
    //unset($_SESSION['estado']);
 }
 else{
  header('location:../');
 }
   
  
    
?>
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
    <script src="../src/javascript/modulo_cortado.js"></script>
    <script src="../src/javascript/inicio.js"></script>
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
                <?php foreach ($lista_herramienta as $value) {?>
                   <?php  if($value['nombre_herramienta']=='Cortatubos'){ ?>
                    <li class="caja_h" onclick="configherramienta(<?php echo $value['id_herramienta'] ; ?>,'<?php echo $value['nombre_herramienta']; ?>');">
                        <img src="../src/images/herramientas/cortatubos.png" class="img_herramientas"/>
                            <?php echo $value['nombre_herramienta']; ?>
                    </li>
                    <?php }
                    else if($value['nombre_herramienta']=='Dobladora') { ?>
                    <li class="caja_h" onclick="configherramienta(<?php echo $value['id_herramienta'] ; ?>,'<?php echo $value['nombre_herramienta']; ?>');">
                        <img src="../src/images/herramientas/dobladora de tubos.png" class="img_herramientas"/> 
                        <?php echo $value['nombre_herramienta']; ?>
                     </li>
                    <?php }?>
                
                <?php } ?>
                

                

            </ul>
            <span id="title_herramientas">Materiales</span>
           
            <?php if(isset($lista_material)){   
                foreach ($lista_material as $value) { ?>
                    <?php if($value['nombre_material']=='Tubos metálicos') { ?>
                    <div id="material" onclick="configmaterial(<?php echo $value['id_material']; ?> ,' <?php echo $value['nombre_material']; ?>' );">
                    <img src="../src/images/herramientas/tubos_metal.png" class="class_material" />
                        <?php echo $value['nombre_material']; ?>
                    </div>     
                    <?php }?>
            <?php } } ?>
               
           

        </div>

        <!-- SIMULADOR SECCION -->
        <div class="simulador">
            <div id="title_simulador">
                <span>Corte de tubería</span>
            </div>
            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>
            <div id="run_simulador">
                <div id="s_material">
                                <?php
                                if(isset($_SESSION['grafico_material'])){
                                    echo $_SESSION['grafico_material'];
                                }
                                ?>
                </div>
            </div>
            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>
            <div id="btn_guardar_p" style="text-align:center;">
                <button id ="btn_guardar" onclick="guardarproyecto(<?php if(isset($_SESSION['grafico_material'])){echo  '`'.$_SESSION['grafico_material'].'`';}else{ echo 1;} ?> , <?php   if(isset($_SESSION['lista_proyectos'])){ foreach ($lista_proyectos as $value) { echo $value['id_proyecto'];  }  } else {echo 0;} ?>);" style="width:15rem;height:5rem; border-radius:12px;background-color:#020202; color:white;margin-left:auto;margin-right:auto;">Guardar</button>
            </div>
        </div>
        <div class="vl"></div>
        <div class="configurar">
            
                <?php if(isset($_SESSION['lista_dimensiones']) && isset($nombrematerialseleccionado)) { ?>
                     

          
            <span id="title_config">Material seleccionado:


                <span style="font-weight: bold;">
                 <?php echo $nombrematerialseleccionado;?>
                </span>
            </span>

            <div id="tabla_data">
                    <table id="tb_d">
                        <tr class="tb_filas">
                            <td>Dimensiones</td>
                            <td>Valor</td>
                            <td>Unidad</td>
                        </tr>
                            <?php 
                             if (isset($_SESSION['lista_dimensiones'])) {
                                foreach ($lista_dimensiones as  $value) {
                                    ?>
                                    <tr class="tb_filas">
                                    <td><?php echo $value['nombre_dimensiones']; ?></td>
                                    <td><input type="number" id="valor_dimensiones" value="<?php echo $value['valor_dimensiones']; ?>"/></td>
                                    <td>
                                        <select class="btn btn-secondary " role="group" aria-labelledby="btnGroupDrop1">
                                            <option class="dropdown-item" value="1"><?php echo $value['unidad_dimensiones'];?></option> 
                                            <!-- <option class="dropdown-item" value="2">m</option> -->
                                        </select>
                                    </td>
                                    </tr>
                                    <?php  } }  ?>
                    </table> 
                    <div style="text-align:center;">
                <button  onclick="alert('actualizar dimensiones');" style="width:15rem;height:3rem; border-radius:12px;background-color:#020202; color:white;margin-left:auto;margin-right:auto;">Actualizar</button>
            </div>     
            </div>
            <?php } else{ ?>
                <span id="title_config">Material seleccionado:
                <span style="font-weight: bold;">
                Ninguno
                </span>
                </span>
            <?php } ?>


            <div align="center" >
                 <hr  style="width: 80%; ">
            </div>

           


            <?php if(isset($_SESSION['nombre_herramienta_seleccionado']) && isset($_SESSION['lista_configherramienta']) ){ ?>
                <span id="title_config">Herramienta seleccionada: <?php echo$nombreherramientaseleccionada;?></span>
                <table id="tb_c">
                        <tr class="tb_filas">
                            <td>Puntos de referencia</td>
                            <td>Valor</td>
                            <td>Unidad</td>
                        </tr>
                            <?php 
                             if (isset($_SESSION['lista_configherramienta'])) {
                                foreach ($lista_configherramienta as  $value) {
                                    ?>
                                    <tr class="tb_filas">
                                    <td><?php echo $value['punto_referencia_configherramienta']; ?></td>
                                    <td><input type="number" id="valor_config_herramienta" value="<?php echo $value['valor_configherramienta']; ?>"/></td>
                                    <td>
                                        <select class="btn btn-secondary " role="group" aria-labelledby="btnGroupDrop1">
                                            <option class="dropdown-item" value="1"><?php echo $value['unidad__configherramienta'];?></option> 
                                            <!-- <option class="dropdown-item" value="2">m</option> -->
                                        </select>
                                    </td>
                                    </tr>
                                    <?php  } }  ?>
                    </table>  
                    <div style="text-align:center;">
                    <button  onclick="ejecutar();" style="width:15rem;height:3rem; border-radius:12px;background-color:#020202; color:white;margin-left:auto;margin-right:auto;">Ejecutar</button>
                </div> 

           <?php  
        } else{  ?>
                  <span id="title_config" >Herramienta seleccionada: </span>
                  <div  id="mensaje_h_null" align="center" >
                <span id="mensaje_herramienta_null">Ninguna</span><br>
                <span id="m_h_content">Por favor seleccione una herramienta!!</span>
            </div>

            <?php } ?>

            


           
        </div>
     </div>
     
     
    

</body>
</html>