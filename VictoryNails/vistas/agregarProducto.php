<?php
$opcion="agregar";
if(isset($_POST['valor'])){
  $opcion=$_POST['valor'];
  $id=$_POST['id_producto'];

  $conect= mysqli_connect("localhost","root","","victory nails");
$conect->set_charset("utf8");
$sql= "SELECT * from productos where id_producto=".$id;
$getProducto= mysqli_query($conect,$sql);
if($getProducto->num_rows>0){
  while($registro=$getProducto->fetch_object()){
    $producto=$registro;
  break;
  }
}

}
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<?php
include("navbar.php");
?>
<body>
    <div class="  container pt-5">
        <div class="row">
             <div class="col-sm-8 offset-1">
             
             <?php if($opcion=='editarProducto'){
               
               ?>
             <div class="card" >
  <div class="card-body">
    <h5 class="card-title">Editar Producto</h5>
    <hr>
    <form action="../controllers/control/productosController.php" method="POST">
  <div class="form-group">
  <input type='hidden' value="<?php echo $producto->id_producto; ?>" name='id_producto'>
    <label >Nombré</label>
    <input type="text" class="form-control" name="nombre_p" value="<?php echo $producto->nombre; ?>"  >
  </div>
  <div class="form-group">
    <label >Precio</label>
    <input type="text" class="form-control" name="precio_p"  value="<?php echo $producto->precio; ?>">
  </div>
  <div class="form-group">
    <label >Stock</label>
    <input type="text" class="form-control" name="stock_p"  value="<?php echo $producto->stock; ?>">
  </div>
  <div class="form-group">
    <label >Vendidos</label>
    <input type="text" class="form-control" name="vendidos_p"  value="<?php echo $producto->vendidos; ?>">
  </div>
  <div class="form-group">
    <label >Imagen</label>
    <input type="text" class="form-control" name="img_p"  value="<?php echo $producto->img; ?>">
  </div>
  <div class="form-group">
    <label >Descripcion</label>
    <input type="text" class="form-control" name="descripcion_p"  value="<?php echo $producto->descripcion; ?>">
  </div>
  <div class="form-group">
  <label for="inputState">Activo</label>
        <select name="activo_p" class="form-control">
         <option <?php if ($producto->activo==1) { ?>selected<?php } ?> value="1">Activo</option>
          <option <?php if ($producto->activo==0) { ?>selected<?php } ?> value="0">Inactivo</option>
        </select>
   </div>
 
  <div class="form-group">
    <label >Marca</label>
    <input type="text" class="form-control" name="marca_p" value="<?php echo $producto->marca; ?>" >
  </div>
 
  
  
  <button type="submit"  class="btn btn-primary btn-lg">Actualizar</button>
  <br>
  </div>
  <input type="hidden" value="editarProducto" name="valor">
</div>

<?php }else{?>
  <form action="../controllers/control/productosController.php" method="POST" class="pb-5">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label >Nombré</label>
      <input type="text" class="form-control " maxlength="20"  name="nombre_p" required>
      
    </div>
    <div class="col-md-4 mb-3">
      <label >Precio</label>
      <input type="text" class="form-control" maxlength="20"  pattern="[0-9]+"  name="precio_p" required>
     
    </div>
    <div class="col-md-4 mb-3">
      <label >Marca</label>
      <input type="text" class="form-control "  maxlength="20" pattern="[a-zA-Z]+"  name="marca_p" required>
      
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Descripción</label>
      <input type="text" class="form-control" name="descripcion_p" maxlength="100" required>
    </div>
    
    <div class="col-md-3 mb-3">
      <label >Stock</label>
      <input type="text" class="form-control" name="stock_p" pattern="[0-9]+" minlength="1" maxlength="10" required>
    </div>
    <div class="col-md-3 mb-3">
      <label >Url imagen</label>
      <input type="text" class="form-control" name="img_p"  maxlength="100" required>
    </div>
  </div>
  <input type="hidden" value="agregarProducto" name="valor">
  <button class="btn btn-primary" type="submit">Registrar</button>
</form>

<?php } ?>
             </div>
         </div>
     </div>

</body>
</html>