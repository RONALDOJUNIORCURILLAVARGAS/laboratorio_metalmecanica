<?php 
session_start();
$grados = $_POST['valorejecucion'];
$distanciax=$_POST['ejex'];
$distanciay=$_POST['ejey'];
echo 'Mando '.$grados.'grados <br>'; 
$distanciax=250-$distanciax;
echo 'distancia x = '.$distanciax.'<br>';
$distanciay=115+$distanciay;
echo 'distancia y = '.$distanciay.'<br>';

$grafico_material=$_SESSION['grafico_material'];
$grafico_material= "<div style='width: 500px;
height: 250px;
background-color: none;
display: flex;
position: absolute;
margin-left: 200px;'>

<div  style='width: 250px;
height: 20px;
background-color: #777777;
margin-top:".$distanciay."px;'>
</div>
<div style='width: 250px;
    height: 250px;
    background-color: none;
    border-radius: 100%;'>
    <div style='width: 250px;
    height: 20px;
    background-color:#777777;
    transform: rotate(-".$grados."deg);
    margin-left: auto;
    margin-right: auto;
    margin-top: 115px;
    border-radius: 50px;
    position:absolute;
    left:".$distanciax."px;
    '>
    </div>
</div>

</div>";

$_SESSION['grafico_material']=$grafico_material;
header('location:../views/modulo_cortado.php');
?>