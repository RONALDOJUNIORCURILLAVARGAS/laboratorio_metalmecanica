function configmaterial(idmaterial,nombrematerial){


    window.document.form.action="../controllers/control_seleccionarMaterial.php";
    window.document.form.method="POST";
    window.document.form.idmaterial.value=idmaterial;
    window.document.form.nombrematerial.value=nombrematerial;
    window.document.form.submit();

}
function configherramienta(idherramienta,nombreherramienta) {
    window.document.form.action="../controllers/control_selecionarHerramienta.php";
    window.document.form.method="POST";
    window.document.form.idherramienta.value=idherramienta;
    window.document.form.nombreherramienta.value=nombreherramienta;
    window.document.form.submit();
}
function ejecutar(){
    let valor_unidad=document.getElementById("valor_unidad").value;
    let valor=document.getElementById("valor_config_herramienta").value; 
    if(valor_unidad=="grados")
    {
        if(valor<180 && valor>0){
            let radio=125;
        let newvalor=((valor*Math.PI)/180);
        let y=radio*(Math.sin(newvalor));
        let x=radio-(radio*(Math.cos(newvalor)));
        window.document.form.action="../controllers/control_ejecutardobladora.php";
        window.document.form.method="POST";
        window.document.form.valorejecucion.value=valor;
        window.document.form.ejey.value=y;
        window.document.form.ejex.value=x;
        window.document.form.submit();
        }
        else{
            alert('Ingrese un valor menor a 180° o mayor a 0 ');
        }
    }
    else{   
        let total=document.getElementById("valor_dimensiones").value;
        total=parseInt(total, 10);
        valor=parseInt(valor, 10);
        if(total>valor){
        let probabilidad=100*valor/total;
        window.document.form.action="../controllers/control_ejecucionherramienta.php";
        window.document.form.method="POST";
        window.document.form.valorejecucion.value=probabilidad;
        window.document.form.submit();

        }
        else {
            alert('Ingrese un valor punto de referencia valido');
        }
    }
    /*
    let valor=document.getElementById("valor_config_herramienta").value;  
    let total=document.getElementById("valor_dimensiones").value;
    total=parseInt(total, 10);
    valor=parseInt(valor, 10);
    if(total>valor){
    let probabilidad=100*valor/total;
    window.document.form.action="../controllers/control_ejecucionherramienta.php";
    window.document.form.method="POST";
    window.document.form.valorejecucion.value=probabilidad;
    window.document.form.submit();

    }
    else {
        alert('Ingrese un valor punto de referencia valido');
    }
    */
}
function guardarproyecto(codigo,idproyecto) {
    if(codigo ==1){
        alert('No realizo ninguna modificación');
    }
    else{
        window.document.form.action="../controllers/control_guardar_proyecto.php";
        window.document.form.method="POST";
        window.document.form.codigografico.value=codigo;
        window.document.form.idproyecto.value=idproyecto;
        window.document.form.submit();
    }
   
}