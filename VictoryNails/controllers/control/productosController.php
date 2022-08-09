<?php

    include("../../modules/productosModel.php");
    $accionpredefinida="verproductos";
    $accion= isset($_POST['valor'])?$_POST['valor']:$accionpredefinida;

    switch($accion){

        case 'comprarlo_ahora':
                $id=$_POST["id_producto"];
                addCompra($id);
            break;
        case 'desactivarProducto':
            $id =$_POST['id_producto'];
            desactivarProducto($id);
            break;
        case'activarProducto':
            $id =$_POST['id_producto'];
            activarProducto($id);
            break;
        case 'editarProducto':
            $id =$_POST['id_producto'];
            $nombre=$_POST["nombre_p"];
            $precio=$_POST["precio_p"];
            $stock=$_POST["stock_p"];
            $vendidos=$_POST["vendidos_p"];
            $descripcion=$_POST["descripcion_p"];
            $marca=$_POST["marca_p"];
            $activo=$_POST["activo_p"];
            $img=$_POST["img_p"];
                updateProducto($id,$nombre,$img,$precio,$activo,$stock,$vendidos,$descripcion,$marca);
             break;
        case'agregarProducto':
            $nombre=$_POST["nombre_p"];
            $precio=$_POST["precio_p"];
            $stock=$_POST["stock_p"];
            $descripcion=$_POST["descripcion_p"];
            $marca=$_POST["marca_p"];
            $img=$_POST["img_p"];

                agregarProducto($nombre,$img,$precio,$stock,$descripcion,$marca);
            break;
        
        }


?>