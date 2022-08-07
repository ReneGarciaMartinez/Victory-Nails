<?php
function get_productos(){
    
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos`";
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
                    <div class="pad-bt"> 
                    <form action='../vistas/compra.php' method='POST'>
        <input type='hidden' value="<?php echo $row["id_producto"];?>" name='id_producto'>
        <input type='hidden' value='comprar_ahora' name='valor'>
        <input type="submit" value="Comprar ahora" class="btn btn-outline-danger ">
      </form>    </div>
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

    ?>