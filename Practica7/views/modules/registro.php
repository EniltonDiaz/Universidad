<h1>REGISTRO DE USUARIO</h1>

<form method="post" onSubmit="return validarRegistro()">

    <label for="usuarioRegistro">Usuario</label>
    <input type="text" placeholder="Maximo 6 caracteres" maxlength="6" name="usuarioRegistro" id="usuarioRegistro" required>

    <label for="passwordRegistro">Contraseña</label>
    <input type="password" placeholder="Minimo 6 caracteres, incluir numero(s) y una mayuscula" name="passwordRegistro" id="passwordRegistro" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>

    <label for="emailRegistro">Correo Electronico</label>
    <input type="email" placeholder="Escriba su correo electronico correctamente" name="emailRegistro" id="emailRegistro" required>

    <p style="text-align:center"><input type="checkbox" id="terminos"><a href="#">Acepta terminos y condiciones</a></p>

    <input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

    if($_GET["action"] == "ok"){

        echo "Registro Exitoso";

    }

}


?>
