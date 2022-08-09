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
    <title>Home</title>
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

    <!--Inicio banner:one %-->
    <div class="card padingss">
        <img src="../img/banner-des-w.png" alt="banner" class="img-fluid rounded-start">
    </div>
    <!--Products-->
    <div class="md-12 pad-prod">
        <h1 class="text-center text-black font-tt">Productos</h1>
    </div>
    <!--cards products-->
    <div class="row row-cols-1 row-cols-md-3 g-4 padds">
        
<?php  get_productos();  ?>
    </div>
    <!--banner descuentos %-->
    <div class="card padingss">
        <img src="../img/banner-balck.png" alt="banner" class="img-fluid rounded-start">
    </div>
    <!--Perfumes Florales-->
    <div class="md-12 pad-prod">
        <h1 class="text-center text-black font-tt">Perfumes Florales</h1>
    </div>

    <!--Gallery perfums-->
    <div class="gallery pssd">
        <div class="one"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="two"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="three"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="four"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="five"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="six"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="seven"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHbNtRfxnexSWk8zWdFd3IwIRhz8S5jNM3Mg&usqp=CAU" class="img-fluid" />
        </div>
        <div class="eigth"> <img src="./img/instV.png" class="img-fluid" />
        </div>
    </div>
    <!--line down-->
    <div class="row">
        <div class="col md-12 mb-6">
            <hr class="degrad">
        </div>
    </div>

</body>

</html>