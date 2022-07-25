<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar_usuario.css">
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

</head>
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

</body>

</html>