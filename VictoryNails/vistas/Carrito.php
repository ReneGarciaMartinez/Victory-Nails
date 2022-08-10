<?php
@session_start();
error_reporting(0);
$session = $_SESSION["nombre"];
if($session == null || $session == ''){
    header("Location: account.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="storeStyles.css">
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
$perfil=$_SESSION["perfil"];

switch($perfil){
    case '1':
        include("navbar_usuario.php");
    break;

    case '2':
        include("navbar.php");
    break;
            break;
}

include("../modules/productosModel.php");
?>

<body>
<body>
    <div class="  container pt-5">
        <div class="row">
            <div class="col-lg-10">
                <h1><i class="fa fa-shopping-bag" aria-hidden="true"></i> Productos</h1> 
            </div>
             
<div class="col-sm-12 pt-4">
             
 <table class="table">
  <thead>
    <tr>
      <th scope="col" class="text-info">ID</th>
      <th scope="col" class="text-info">Nombré</th>
      <th scope="col" class="text-info">Imagen</th>
      <th scope="col" class="text-info">Precio</th>
      <th scope="col" class="text-info">Cantidad</th>
      <th scope="col" class="text-info">Descripción</th>
      <th scope="col" class="text-info">Marca</th>
      <th scope="col" class="text-info">Opciones</th>
    
    </tr>
  </thead>
  <tbody>
  <?php
                 getProductosCarrito();
                ?>
        

</body>
</body>

</html>