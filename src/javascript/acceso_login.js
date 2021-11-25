function acceder() {
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="1";
    window.document.form.submit();
 
}

function registrar() {
    window.document.form.action="../controllers/control_login.php";
    window.document.form.method="POST";
    window.document.form.op.value="3";
    window.document.form.submit();
}
function registro(){
    let nombre=window.document.form.nombre.value;
    let apellido=window.document.form.apellido.value;
    let correo=window.document.form.correo.value;
    let cv1=window.document.form.clave.value;
    let cv2=window.document.form.clave_2.value;
    if(nombre.length!==0 && apellido.length!==0 && correo.length!==0 && cv1.length!==0 && cv2.length!==0){
        let concat_correo="";
        for (let i=correo.length-12;i<correo.length;i++){
            concat_correo+=correo[i];
        }
        if(concat_correo==="@unfv.edu.pe"){
            if(cv1===cv2){
                window.document.form.action="../controllers/control_registro.php";
                window.document.form.method="POST";
                window.document.form.op.value="1";
                window.document.form.submit();
            }
            else{
                
                alert('Las contraseñas ingresadas son diferentes');
            }
        }
        else{
            alert('Ingrese un correo institucional valido: example@unfv.edu.pe');
        }
            
    }else{
        alert('Complete todo los campos por favor!!');
    }
}