<?php

    include("../../modules/productosModel.php");
    $accionpredefinida="verproductos";
    $accion= isset($_POST['valor'])?$_POST['valor']:$accionpredefinida;

    switch($accion){

        case 'comprarlo_ahora':
                $id=$_POST["id_producto"];
                addCompra($id);
            break;
         case 'pagarCarrito':
            $total=$_POST["total_v"];
             pagarCarrito($total);
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
            $precio=$_POST["precio"];
            $stock=$_POST["stock_p"];
            $vendidos=$_POST["vendidos_p"];
            $descripcion=$_POST["descripcion_p"];
            $marca=$_POST["marca_p"];
            $activo=$_POST["activo_p"];
            $img=$_POST["img"];
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
        case'agregar_a_carrito':
            $id_producto=$_POST["id_producto"];
                agregar_a_carrito($id_producto);
            break;
        case 'eliminar_producto_carrito':
            $id_carrito =$_POST['id_carrito'];
                 eliminar_producto_carrito($id_carrito);
            break;
        case 'hacerEnvio':
             $id_venta =$_POST['id_venta'];
             hacerEnvio($id_venta);
             break;
        }


?>