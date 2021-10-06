<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script>
        function validarDatosGET() {
            var verificar = true;

            if (!document.valida_datos_get_frm.nombre_txt.value) {
                alert("el campo nombre es requerido");
                document.valida_datos_get_frm.nombre_txt.focus();
                verificar = false;
            } else if(!document.valida_datos_get_frm.password_txt.value){
                alert("el campo password es requerido");
                document.valida_datos_get_frm.password_txt.focus();
                verificar = false;
            }else if(!document.valida_datos_get_frm.sexo_rdo[0].checked &&
            !document.valida_datos_get_frm.sexo_rdo[1].checked  ){
                alert("el campo password es requerido");
                !document.valida_datos_get_frm.sexo_rdo[0].focus();
                verificar = false;
            }

            if(verificar){
                document.valida_datos_get_frm.submit();
            }
        }
        window.onload = function(){
            document.getElementById("enviar-get").onclick=validarDatosGET;
        }   
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de datos con PHP</title>
</head>

<body>
    <hgroup>
        <h1>Formulario de datos GET</h1>
    </hgroup>
    <form name="valida_datos_get_frm" action="validar_datos.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label>Ingresa tu nombre:</label>
        <input type="text" name="nombre_txt">
        <br> <br>
        <label>Ingresa tu password:</label>
        <input type="password" name="password_txt">
        <br><br>
        <input type="radio" name="sexo_rdo" value="M">
        MASCULINO
        <input type="radio" name="sexo_rdo" value="F">
        FEMENINO
        <br><br>
        <input type="hidden" name="enviar_hdn" value="get">
        <input type="button" id="enviar-get" name="enviar_btn" value="Enviar x GET" >
    </form>
</body>

</html>