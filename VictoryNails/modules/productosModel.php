<?php
 $carrito_activo=0;
function get_productos(){
    
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos` WHERE activo=1";
    $getUs= mysqli_query($conect,$sql);
    $i=0;
    if($getUs->num_rows>0){
            while($row = mysqli_fetch_array($getUs)){
              
         ?>
<div class="col">
    <div class="card h-100">

        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="<?php echo $row["img"]?>" class="img-fluid" />
            <a href="#!">
                <div class="mask" style="background-color: rgba(148, 148, 148, 0.15);"></div>
            </a>
        </div>
        <div class="card-body">
            <h5 class="card-title text-center"><?php echo $row["nombre"]?></h5>
            <div class="row">
                <div class="col-4">
                    <form action='../vistas/compra.php' method='POST'>
                        <input type='hidden' value="<?php echo $row["id_producto"];?>" name='id_producto'>
                        <input type='hidden' value='comprar_ahora' name='valor'>
                        <input type="submit" value="Comprar ahora" class="btn btn-outline-danger ">
                    </form>
                </div>
                <div class="col-3">
                    <form action='../controllers/control/productosController.php' method='POST'>
                        <input type='hidden' value="<?php echo $row["id_producto"];?>" name='id_producto'>
                        <input type='hidden' value='agregar_a_carrito' name='valor'>
                        <button type="submit" class="btn btn-outline-success" style="height: 37px; width: 60px;">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="card-footer text-muted text-center">
      
      </div>
            -->

<?php
            
            }
        }   
    }
function addCompra($id){

    @session_start();
    $id_usuario=$_SESSION["id_user"];
   
    //conexion a la BD
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos` WHERE id_producto='$id'";
$getProducto= mysqli_query($conect,$sql);
$c=0;
if($getProducto->num_rows>0){
        while($row = mysqli_fetch_array($getProducto)){
            if ($row["stock"]==0) {
                echo "<script type=\"text/javascript\">alert(\"no se contiene mas stock de este producto.\");</script>";
                echo"<script type='text/javascript'>
                window.location='../../vistas/store.php';
                </script>";
                $c=1;
             }
             $stock_actual=$row["stock"];
             $vendidos_actual=$row["vendidos"];
        }
    }
    //si hay en stock se hace la venta
if ($c==0) {
    //agregamos un nuevo id_venta
    $sql= "SELECT max(id_venta)  FROM `ventas`";
    $getId= mysqli_query($conect,$sql);
    if($getId->num_rows>0){
        while($row = mysqli_fetch_array($getId)){
            $id_venta=$row["max(id_venta)"]+1;
   
        }
    }
    //Hacemos la venta
   echo $sql= "INSERT INTO `ventas` (`id`, `id_producto`, `id_venta`, `id_usuario`) VALUES (NULL, '$id', '$id_venta', '$id_usuario')";
    $agregarVenta= mysqli_query($conect,$sql);

    if($agregarVenta){
        $stock_actual=$stock_actual-1;
        $vendidos_actual=$vendidos_actual+1;
        $sql= "UPDATE `productos` SET `stock` = '$stock_actual', `vendidos` = '$vendidos_actual' WHERE `productos`.`id_producto` = $id";
        $stock= mysqli_query($conect,$sql);

        echo "<script type=\"text/javascript\">alert(\"Venta realizada tu numero de venta es '$id_venta'\");</script>";
        echo"<script type='text/javascript'>
        window.location='../../vistas/store.php';
        </script>";
    }else{
        echo"fallo";
    }
}else{
    echo "<script type=\"text/javascript\">alert(\"Fallo al generar la venta\");</script>";
    echo"<script type='text/javascript'>
    window.location='../../vistas/store.php';
    </script>";
}
    

}
function getProductosAdmin(){
    
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos` WHERE activo=1";
    $getUs= mysqli_query($conect,$sql);
    
    if($getUs->num_rows>0){
            while($row = mysqli_fetch_array($getUs)){
         ?>
<tr>
    <th class="text-dark"><?php echo $row["id_producto"]?></th>
    <th class="text-dark"><?php echo $row["nombre"]?></th>
    <th class="text-dark"><?php echo $row["precio"]?></th>
    <th class="text-dark"><?php echo $row["stock"]?></th>
    <th class="text-dark"><?php echo $row["vendidos"]?></th>
    <th class="text-dark"><?php echo $row["descripcion"]?></th>
    <th class="text-dark"><?php echo $row["marca"]?></th>
    <th>

        <form class="pb-1" action='../controllers/control/productosController.php' method='POST'
            onSubmit="if(!confirm('¿Realmente quiere desactivar este producto?')){return false;}">
            <input type='hidden' name='id_producto' value="<?php echo $row["id_producto"];?>">
            <input type='hidden' value='desactivarProducto' name='valor'>
            <input type="submit" value="Desactivar" class="btn-sm btn-danger">
        </form>

        <form action='agregarProducto.php' method='POST'>
            <input type='hidden' value="<?php echo $row["id_producto"];?>" name='id_producto'>
            <input type='hidden' value='editarProducto' name='valor'>
            <input type="submit" value="    Editar   " class="btn-sm btn-primary">
        </form>
    </th>
</tr>
<?php
            }
        }   
    }
    function desactivarProducto($id){
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "UPDATE `productos` SET `activo` = '0' WHERE `productos`.`id_producto` =".$id;
$delUs= mysqli_query($conect,$sql);
if($delUs){
    echo "<script type=\"text/javascript\">alert(\"Producto desactivado\");</script>";
    echo"<script type='text/javascript'>
    window.location='../../vistas/productos.php';
    </script>";
}
}
function activarProducto($id){
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "UPDATE `productos` SET `activo` = '1' WHERE `productos`.`id_producto` =".$id;
$delUs= mysqli_query($conect,$sql);
if($delUs){
echo "<script type=\"text/javascript\">alert(\"Producto desactivado\");</script>";
echo"<script type='text/javascript'>
window.location='../../vistas/productos.php';
</script>";
}
}
function getProductosDesactivados(){
    
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos` WHERE activo=0";
    $getUs= mysqli_query($conect,$sql);
    
    if($getUs->num_rows>0){
            while($row = mysqli_fetch_array($getUs)){
         ?>
<tr>
    <th class="text-dark"><?php echo $row["id_producto"]?></th>
    <th class="text-dark"><?php echo $row["nombre"]?></th>
    <th class="text-dark"><?php echo $row["precio"]?></th>
    <th class="text-dark"><?php echo $row["stock"]?></th>
    <th class="text-dark"><?php echo $row["vendidos"]?></th>
    <th class="text-dark"><?php echo $row["descripcion"]?></th>
    <th class="text-dark"><?php echo $row["marca"]?></th>
    <th>
        <form class="pb-1" action='../controllers/control/productosController.php' method='POST'
            onSubmit="if(!confirm('¿Realmente quiere activar este Producto?')){return false;}">
            <input type='hidden' name='id_producto' value="<?php echo $row["id_producto"];?>">
            <input type='hidden' value='activarProducto' name='valor'>
            <input type="submit" value="Activar" class="btn-sm btn-success">
        </form>

    </th>
</tr>
<?php
            }
        }   
    }
    function  updateProducto($id,$nombre,$precio,$img,$activo,$stock,$vendidos,$descripcion,$marca){
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
      $sql= "UPDATE `productos` SET `nombre` = '$nombre',  `stock` = '$stock', `vendidos` = '$vendidos', `descripcion` = '$descripcion', `activo` = '$activo', `img` = '$precio',`precio` = '$img', `marca` = '$marca' WHERE `productos`.`id_producto` = ".$id;
        $updateProducto= mysqli_query($conect,$sql);
        if($updateProducto){
            echo "<script type=\"text/javascript\">alert(\"Producto actualizado\");</script>";
            echo"<script type='text/javascript'>
            window.location='../../vistas/productos.php';
            </script>";
        }
    }
    
    function  agregarProducto($nombre,$img,$precio,$stock,$descripcion,$marca){
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "INSERT INTO `productos` (`id_producto`, `nombre`, `precio`,`vendidos`, `stock`, `descripcion`, `activo`, `img`, `marca`) VALUES (NULL, '$nombre', '$precio','0', '$stock', '$descripcion', '1', '$img', '$marca')";
        $agregarProducto= mysqli_query($conect,$sql);
        if($agregarProducto){
            echo "<script type=\"text/javascript\">alert(\"Producto agregado\");</script>";
            echo"<script type='text/javascript'>
            window.location='../../vistas/productos.php';
            </script>";
        }
    }
    function   agregar_a_carrito($id_producto){
        @session_start();
        $id_usuario=$_SESSION["id_user"];
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= " INSERT INTO `carrito` (`id_carrito`, `id_producto`, `id_usuario`,`cantidad`) VALUES (NULL, '$id_producto', '$id_usuario', '1')";
        $agregarProducto= mysqli_query($conect,$sql);
        if($agregarProducto){
            echo "<script type=\"text/javascript\">alert(\"Producto agregado a carrito\");</script>";
            echo"<script type='text/javascript'>
            window.location='../../vistas/store.php';
            </script>";
        }
    }
 function getProductosCarrito(){
        @session_start();
        $id_usuario=$_SESSION["id_user"];
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "SELECT p.*, c.* from productos as p, carrito as c WHERE p.id_producto=c.id_producto and c.id_usuario='$id_usuario'";
        $getUs= mysqli_query($conect,$sql);
        $total=0;
        if($getUs->num_rows>0){
                while($row = mysqli_fetch_array($getUs)){
             ?>
<tr>
    <th class="text-dark"><?php echo $row["id_producto"]?></th>
    <th class="text-dark"><?php echo $row["nombre"]?></th>
    <th class="text-dark"><img src="<?php echo $row["img"]?>" style="height: 90px; width: 80px;" alt=""></th>
    <th class="text-dark"><?php echo $row["precio"]?></th>
    <th class="text-dark"><?php echo $row["cantidad"]?></th>
    <th class="text-dark"><?php echo $row["descripcion"]?></th>
    <th class="text-dark"><?php echo $row["marca"]?></th>
    <th>

        <form class="pb-1" action='../controllers/control/productosController.php' method='POST'
            onSubmit="if(!confirm('¿Realmente quiere desactivar este producto?')){return false;}">
            <input type='hidden' name='id_carrito' value="<?php echo $row["id_carrito"];?>">
            <input type='hidden' value='eliminar_producto_carrito' name='valor'>
            <input type="submit" value="Eliminar" class="btn-sm btn-danger">
        </form>
    </th>
</tr>
<?php
            $total=$total+$row["precio"];
                }
                ?>
</tbody>
</table>
</div>
</div>
<div class="row">
    <div class="col-9"></div>
    <div class="col-3 align-self-end">
        <h4>
            Total a pagar: $<?php echo $total;?>
        </h4>
    </div>
</div>
<div class="row">
    <div class="col-10"></div>
    <div class="col-1 align-self-end">
        <form class="pb-1" action='../controllers/control/productosController.php' method='POST'>
            <input type='hidden' value='pagarCarrito' name='valor'>
            <input type='hidden' name='total_v' value="<?php echo $total?>">
            <input type="submit" value="Pagar" class="btn-sm btn-success">
        </form>
    </div>
</div>
</div>
<?php
            }   
        }
 function eliminar_producto_carrito($id_carrito){
            $conect= mysqli_connect("localhost","root","","victory nails");
            $conect->set_charset("utf8");
            $sql= "DELETE FROM `carrito` WHERE `carrito`.`id_carrito` = ".$id_carrito;
    $delUs= mysqli_query($conect,$sql);
    if($delUs){
        echo "<script type=\"text/javascript\">alert(\"Producto eliminado\");</script>";
        echo"<script type='text/javascript'>
        window.location='../../vistas/Carrito.php';
        </script>";
    }
    }
function pagarCarrito($total){

        @session_start();
        $id_usuario=$_SESSION["id_user"];
       
        //conexion a la BD
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "SELECT p.*, c.* from productos as p, carrito as c WHERE p.id_producto=c.id_producto and c.id_usuario='$id_usuario'";
    $getProducto= mysqli_query($conect,$sql);
    $c=0;
     if ($c==0) {
        //agregamos un nuevo id_venta
        $sql= "SELECT max(id_venta)  FROM `ventas`";
        $getId= mysqli_query($conect,$sql);
        if($getId->num_rows>0){
            while($row = mysqli_fetch_array($getId)){
                $id_venta=$row["max(id_venta)"]+1;
       
            }
        }
    if($getProducto->num_rows>0){
            while($row = mysqli_fetch_array($getProducto)){
                if ($row["stock"]==0) {
                    echo "<script type=\"text/javascript\">alert(\"no se contiene mas stock de este producto.\");</script>";
                    echo"<script type='text/javascript'>
                    window.location='../../vistas/store.php';
                    </script>";
                    $c=1;
                 }
                 $stock_actual=$row["stock"];
                 $vendidos_actual=$row["vendidos"];
                 $id_producto=$row["id_producto"];
                 echo $sql= "INSERT INTO `ventas` (`id`, `id_producto`, `id_venta`, `id_usuario`,`total`) VALUES (NULL, '$id_producto', '$id_venta', '$id_usuario','$total')";
                 $agregarVenta= mysqli_query($conect,$sql);
             
                 if($agregarVenta){
                     $stock_actual=$stock_actual-1;
                     $vendidos_actual=$vendidos_actual+1;
                     $sql= "UPDATE `productos` SET `stock` = '$stock_actual', `vendidos` = '$vendidos_actual' WHERE `productos`.`id_producto` = $id_producto";
                     $stock= mysqli_query($conect,$sql);
            }
        }
        $sql= " DELETE FROM `carrito` WHERE `carrito`.`id_usuario` = $id_usuario";
        $agregarVenta= mysqli_query($conect,$sql);
       
        //Hacemos la redirecion
            echo "<script type=\"text/javascript\">alert(\"Venta realizada tu numero de venta es '$id_venta'\");</script>";
            echo"<script type='text/javascript'>
            window.location='../../vistas/store.php';
            </script>";
        }else{
            echo"fallo";
        }
    }else{
        echo "<script type=\"text/javascript\">alert(\"Fallo al generar la venta\");</script>";
        echo"<script type='text/javascript'>
        window.location='../../vistas/store.php';
        </script>";
    }
        
    
    }
    function getVentas(){
        @session_start();
        $id_usuario=$_SESSION["id_user"];
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "SELECT DISTINCT id_venta, total FROM ventas";
        $getVenta= mysqli_query($conect,$sql);
        $total=0;
        if($getVenta->num_rows>0){
                while($row = mysqli_fetch_array($getVenta)){
             ?>

<tr>
    <th class="text-dark">

        <table class="table table-borderless">
            <th scope="col" class="text-info">Id venta</th>
            <th scope="col" class="text-info">Nombré</th>
            <th scope="col" class="text-info">Imagen</th>
            <th scope="col" class="text-info">Precio</th>
            <th scope="col" class="text-info">Cantidad</th>
            <th scope="col" class="text-info">Descripción</th>
            <th scope="col" class="text-info">Marca</th>

            <?php
            $id_venta=$row["id_venta"];
            $total=$row["total"];
              obtener_productos_vendidos($id_venta);
              ?>

            <th scope="col" colspan="6" class="text-dark text-center"></th>
            <th scope="col" colspan="1" class="text-dark table-info">Total de la venta: $<?php echo $total;?></th>
        </table>


    </th>
    <th scope="col" colspan="7" class="text-dark text-center"></th>
    <?php 
     $sql= "SELECT DISTINCT envio FROM `ventas` WHERE id_venta=$id_venta";
     $getEnvio= mysqli_query($conect,$sql);
     if($getEnvio->num_rows>0){
        while($row = mysqli_fetch_array($getEnvio)){
            $envios=$row["envio"];
            if($envios==1){?>
                <th scope="col" colspan="1" class="text-success align-middle">Enviado<i class="fa fa-truck" aria-hidden="true"></i></th>
             <?php
            }else{
            ?>
                <th scope="col" colspan="1" class="text-danger align-middle"><form class="pb-1" action='../controllers/control/productosController.php' method='POST'
            onSubmit="if(!confirm('¿Realmente mandaste este pedido?')){return false;}">
            <input type='hidden' name='id_venta' value="<?php echo $id_venta?>">
            <input type='hidden' value='hacerEnvio' name='valor'>
            <input type="submit" value="Enviado" class="btn-sm btn-success">
        </form>no enviado<i class="fa fa-truck"aria-hidden="true"></i></th>
             <?php
             }
        }
        }
    ?>

</tr>
<?php
                }
            }   
        }
    function obtener_productos_vendidos($id_venta){
            
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT p.*, v.* from productos as p, ventas as v WHERE p.id_producto=v.id_producto and v.id_venta=$id_venta";
    $getUs= mysqli_query($conect,$sql);
    
    if($getUs->num_rows>0){
            while($row = mysqli_fetch_array($getUs)){
         ?>
<tr>
    <th class="text-dark"><?php echo $row["id_venta"]?></th>
    <th class="text-dark"><?php echo $row["nombre"]?></th>
    <th class="text-dark"><img src="<?php echo $row["img"]?>" style="height: 40px; width: 30px;" alt=""></th>
    <th class="text-dark"><?php echo $row["precio"]?></th>
    <th class="text-dark"><?php echo $row["cantidad"]?></th>
    <th class="text-dark"><?php echo $row["descripcion"]?></th>
    <th class="text-dark"><?php echo $row["marca"]?></th>
</tr>

<?php
            }
        }
      
      
             
    }
    function hacerEnvio($id){
        $conect= mysqli_connect("localhost","root","","victory nails");
        $conect->set_charset("utf8");
        $sql= "UPDATE `ventas` SET `envio` = '1' WHERE `ventas`.`id_venta` =".$id;
$delUs= mysqli_query($conect,$sql);
if($delUs){
    echo "<script type=\"text/javascript\">alert(\"Pedido enviado\");</script>";
    echo"<script type='text/javascript'>
    window.location='../../vistas/ventas.php';
    </script>";
}
}
    
    ?>