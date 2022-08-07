<?php

    include("../../modules/productosModel.php");
    $accionpredefinida="verproductos";
    $accion= isset($_POST['valor'])?$_POST['valor']:$accionpredefinida;

    switch($accion){

        case 'comprarlo_ahora':
                $id=$_POST["id_producto"];
                addCompra($id);
            break;
    }


?>