function salir(){
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="2";
    window.document.form.submit();
}
function acceder_proyecto(id_proyecto) {
    window.document.form.action="../controllers/control_acceder_proyecto.php";
    window.document.form.method="POST";
    window.document.form.op.value="2";
    window.document.form.idproyecto.value=id_proyecto;
    window.document.form.submit();
}
function registrar_proyecto(){
    window.document.form.action="../controllers/control_reg_proyecto.php";
    window.document.form.method="POST";
    window.document.form.op.value="1";
    window.document.form.submit();
}
function registrarproyecto() {
    let a=document.getElementById('floatingInput').value;
    if(a.length!=0)
    {
        window.document.form.action="../controllers/control_acceder_proyecto.php";
        window.document.form.method="POST";
        window.document.form.op.value="1";
        window.document.form.nombrenuevoproyecto.value=a;
        window.document.form.submit();
    }else{
        alert('Ingrese un nombre por favor')
    }
}