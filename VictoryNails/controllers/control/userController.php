<?php

    include("../../modules/userModel.php");
    $accionpredefinida="verusers";
    $accion= isset($_POST['valor'])?$_POST['valor']:$accionpredefinida;

    switch($accion){

        case 'registrarusuario':
                $correo=$_POST["correo"];
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $pass=$_POST["contra"];
                $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
                addUsuario($correo,$nombre,$apellido,$hash);
            break;
    }


?>