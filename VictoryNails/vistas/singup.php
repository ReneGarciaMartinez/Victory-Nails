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
<?php
    include("navbarPrincipio.php");
    ?>

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