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
    <!--Inicio banner:one-->
    <div class="card padingss">
        <img src="../img/Le perfumé.png" alt="banner" class="img-fluid rounded-start">
    </div>
    <!--the end-->
    <div class="card padingss ">
        <div class="row g-0">
            <div class="col-md-5 mb-1 img-pd">
                <img src="../img/Captura de pantalla (698).png" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
            </div>
            <div class="col-md-7 GrayC mb-3 ">

                <div class="center prings">
                    <h4 class=" recent-bg">
                        Recientes</h4>
                    <h1>Floral</h1>
                    <h4>Por amor</h4>
                    <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        <br> Neque voluptatum laboriosam velit laudantium eaque odit reprehenderit?
                        <br> Qui et quisquam enim provident, eum magni quis dolores laudantium veritatis
                        <br> necessitatibus aut eius.</p>
                </div>
                <div class="prings">
                    <a type="button" class="btn btn-danger">saber mas</a>
                    <a type="button" class="btn btn-outline-danger">ver todo</a>
                </div>

            </div>
        </div>

    </div>
    </div>
    <!--Mejores Fragancias banner-->
    <div class="card padingss">
        <img src="../img/mejores_fragancias.png" alt="banner" class="img-fluid rounded-start">
    </div>
    <!--Products-->
    <div class="md-12 pad-prod">
        <h1 class="text-center text-black font-tt">Productos</h1>
    </div>
    <!--cards products-->
    <div class="row row-cols-1 row-cols-md-3 g-4 padds">
        
        <?php  get_productos();  ?>
            </div>
    <!--banner des%-->
    <div class="card padingss">
        <img src="../img/desc.png" alt="banner" class="img-fluid rounded-start">
    </div>




</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

</html>