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