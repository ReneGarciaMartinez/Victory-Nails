<?php
@session_start();
error_reporting(0);
$session = $_SESSION["nombre"];
if($session == null || $session == ''){
    header("Location: account.php");
    die();
}

$opcion="agregar";
if(isset($_POST['valor'])){
  $opcion=$_POST['valor'];
  $id=$_POST['id_producto'];

  $conect= mysqli_connect("localhost","root","","victory nails");
  $conect->set_charset("utf8");
  $sql= "SELECT * FROM `productos` WHERE id_producto=$id";
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

</head>
<!--Main Navigation-->
<?php
include("navbar_usuario.php");
include("../modules/productosModel.php");
?>


<body>
    <!--Producto a realizar compra-->
    <div class="col ">
        <div class="card mb-3 md-4" style="max-width: 850px;">
            <div class="row g-0">
                <div class="col-md-5 ">
                    <img src="<?php echo $producto->img; ?>" alt="Trendy Pants and Shoes" class=" rounded-start" height="300px" />
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $producto->nombre; ?></h3>
                        <br>
                        <br>
                        <p class="card-text">
                            Cantidad: <?php echo $producto->descripcion; ?></h3>
                        </p>
                        <p>
                            Fragancia: 500ml
                        </p>
                        <p>
                            Marca: <?php echo $producto->nombre; ?></h3>
                        </p>
                        <p class="card-text">
                            <small class="text-muted">stock: 122</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class=" card mb-3 md-4">
            <div class="card-body">
                <h3 class="card-title">$<?php echo $producto->precio; ?></h3></h3>
                <br>
                <br>
                <p class="card-text">
                    Disponible
                </p>
                <p>
                    Entrega: ***********
                </p>
                <p>
                    Enviar a: ***********
                </p>
                <a href="#" class="btn btn-primary btn-rounded">Añadir carrito</a>
                <form action='../controllers/control/productosController.php' method='POST'>
        <input type='hidden' value="<?php echo $id;?>" name='id_producto'>
        <input type='hidden' value='comprarlo_ahora' name='valor'>
        <input type="submit" value="Compralo Ahora" class="btn btn-outline-danger ">
      </form>    </div>
            </div>
        </div>
    </div>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

</html>