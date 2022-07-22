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
<header>


    <nav class="navbar navbar-dark  grays">
        <div class="container-fluid">
            <div>
                <p class="d-flex input-group w-auto pad-nav " href="#">Tel: +52 9510000000 <br class="pad-navi"> correo123@gmail.com
                </p>

            </div>
            <p>Bienvenido <?php echo $_SESSION["nombre"] ?> <?php echo $_SESSION["apellidos"] ?></p>
            <ul class="navbar-nav flex-row d-none d-md-flex pad-vanLe">

                <li class="nav-item me-3 me-lg-2 active">
                    <a class="nav-link" href="#">
                        <span><i class="fa fa-search text-black"></i></span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-2 active">
                    <a class="nav-link" href="#">
                        <span><img src="../img/shopping-cart.ico" width="20px" height="20px"></img></span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar  grays">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                  </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class=" active text-nav" aria-current="page" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="store.php">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="account.php">ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="singup.php">SIGN UP</a>
                    <!-- Navbar dropdown -->


                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    </div>
</header>

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
        <div class="col">
            <div class="card h-100">

                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(148, 148, 148, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Calvin</h5>

                    <div class="pad-bt"> <a href="#!" class="btn btn-outline-danger ">Comprar ahora</a></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">

                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(148, 148, 148, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Calvin</h5>
                    <div class="pad-bt"> <a href="#!" class="btn btn-outline-danger ">Comprar ahora</a></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">

                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(148, 148, 148, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Calvin</h5>
                    <div class="pad-bt"> <a href="#!" class="btn btn-outline-danger ">Comprar ahora</a></div>
                </div>
            </div>
        </div>

    </div>

    <!--banner des%-->
    <div class="card padingss">
        <img src="../img/desc.png" alt="banner" class="img-fluid rounded-start">
    </div>




</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

</html>