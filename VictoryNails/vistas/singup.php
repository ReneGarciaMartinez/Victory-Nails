<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="accountStyles.css">
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

            <ul class="navbar-nav flex-row d-none d-md-flex pad-vanLe">

                <li class="nav-item me-3 me-lg-2 active">
                    <a class="nav-link" href="#">
                        <span><i class="fa fa-search text-black"></i></span>
                    </a>
                </li>

                <li class="nav-item me-3 me-lg-2 active">
                    <a class="nav-link" href="#">
                        <span><img src="./img/shopping-cart.ico" width="20px" height="20px"></img></span>
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
    <!--LOGIN-->
    <div class="padf radd">
        <div class="card mb-3 border-5 radd" style="max-width: 900px;">
            <div class="row g-0 ">
                <div class="col-md-4 color-mod ">
                    <h1 class="text-center space">REGISTRATE</h1>
                </div>
                <div class="col-md-8 color-bid pgd">
                    <div class="card-body">
                        <!-- Form de registro -->
                        <form action="../controllers/control/userController.php" method="POST" >
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text"name="nombre"  class="form-control">
                                        <label class="form-label" >First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text"  name="apellido" class="form-control">
                                        <label class="form-label" >Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="correo" class="form-control">
                                <label class="form-label" >Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password"  name="contra" class="form-control">
                                <label class="form-label" >Password</label>
                            </div>



                            <!-- Submit button -->
                            <input type="hidden" value="registrarusuario" name="valor">
                              <button  type="submit" class="btn btn-primary btn-block mb-4" style="background-color: rgb(158, 26, 26);">Sign up</button>
                         
                              </form>
                            <!-- Register buttons -->
                            <div class="text-center mb-4">
                                <p>or sign up with:</p>
                                <a type="button" class="violet btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a type="button" class="violet btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </a>

                                <a type="button" class="violet btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>

                                <a type="button" class="violet btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>