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
    <link rel="stylesheet" href="next-compra.css">
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
                        <a class=" active text-nav" aria-current="page" href="./home.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="./store.html">STORE</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="./account.html">ACCOUNT</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-nav" href="./singup.html">SIGN UP</a>
                    </li>

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

    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-2" id="ex-with-icons" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#ex-with-icons-tabs-1" role="tab" aria-controls="ex-with-icons-tabs-1" aria-selected="true"><i class="fas fa-chart-pie fa-fw me-2"></i>Bienvenido</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2" role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-chart-line fa-fw me-2"></i>Dirección</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-3" data-mdb-toggle="tab" href="#ex-with-icons-tabs-3" role="tab" aria-controls="ex-with-icons-tabs-3" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Productos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-4" data-mdb-toggle="tab" href="#ex-with-icons-tabs-4" role="tab" aria-controls="ex-with-icons-tabs-4" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Opción de regalo</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-5" data-mdb-toggle="tab" href="#ex-with-icons-tabs-5" role="tab" aria-controls="ex-with-icons-tabs-5" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Envio</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-6" data-mdb-toggle="tab" href="#ex-with-icons-tabs-6" role="tab" aria-controls="ex-with-icons-tabs-6" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Pago</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex-with-icons-tab-7" data-mdb-toggle="tab" href="#ex-with-icons-tabs-7" role="tab" aria-controls="ex-with-icons-tabs-7" aria-selected="false"><i class="fas fa-cogs fa-fw me-2"></i>Confirmación</a>
        </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex-with-icons-content">
        <div class="tab-pane fade show active" id="ex-with-icons-tabs-1" role="tabpanel" aria-labelledby="ex-with-icons-tab-1">
            <h1>Bienvenido</h1>
            <h3>Da click para continuar con tu compra</h3>
            <ul ul class="nav nav-tabs " id="ex-with-icons">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex-with-icons-tab-2" data-mdb-toggle="tab" href="#ex-with-icons-tabs-2" role="tab" aria-controls="ex-with-icons-tabs-2" aria-selected="false"><i class="fas fa-chart-line fa-fw me-2"></i>Dirección</a>
                </li>
            </ul>

        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-2" role="tabpanel" aria-labelledby="ex-with-icons-tab-2">
            Dirección
            <div class="p-10">
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip01" value="Mark" required />
                            <label for="validationTooltip01" class="form-label">First name</label>
                            <div class="valid-tooltip">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required />
                            <label for="validationTooltip02" class="form-label">Last name</label>
                            <div class="valid-tooltip">Looks good!</div>
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <div class="input-group form-outline">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                            <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required />
                            <label for="validationTooltipUsername" class="form-label">Username</label>
                            <div class="invalid-tooltip">Please choose a unique and valid username.</div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip03" required />
                            <label for="validationTooltip03" class="form-label">City</label>
                            <div class="invalid-tooltip">Please provide a valid city.</div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="validationTooltip05" required />
                            <label for="validationTooltip05" class="form-label">Zip</label>
                            <div class="invalid-tooltip">Please provide a valid zip.</div>
                        </div>
                    </div>
                    <div class="col-12 pt-2">
                        <a class="btn btn-primary" type="submit">Submit form</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-3" role="tabpanel" aria-labelledby="ex-with-icons-tab-3">
            Producto
            <div>
                <h2>Elige el lugar al cual enviar el producto</h2>
                <p>¿Te has olvidado de alguien? Introducce la dirección de envío</p>
            </div>
            <div class="col md-12 mb-3">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>Articulos</th>
                            <th>Cantidad</th>
                            <th>Enviar a:</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" alt="" style="width: 90px; height: 90px" class="rounded-circle" />
                                    <div class="ms-3">
                                        <h3 class="card-title">Calvin Klein 500ml Perfume</h3>
                                        <br>
                                        <br>
                                        <p class="card-text">
                                            Talla: 500ml
                                        </p>
                                        <p>
                                            Color: 500ml
                                        </p>
                                        <p>
                                            Fragancia: 500ml
                                        </p>
                                        <p>
                                            Marca: 500ml
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="select-css mb-3">
                                    <option selected>Selecciona la cant.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </td>
                            <td>
                                <select class="select-css mb-3">
                                    <option selected>Selecciona direc.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-sm btn-rounded">
                            Edit
                          </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" class="rounded-circle" alt="" style="width: 120px; height: 120px" />
                                    <div class="ms-3">
                                        <h3 class="card-title">Calvin Klein 500ml Perfume</h3>
                                        <br>
                                        <br>
                                        <p class="card-text">
                                            Talla: 500ml
                                        </p>
                                        <p>
                                            Color: 500ml
                                        </p>
                                        <p>
                                            Fragancia: 500ml
                                        </p>
                                        <p>
                                            Marca: 500ml
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="select-css mb-3">
                                    <option selected>Selecciona la cant.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </td>
                            <td>
                                <select class="select-css mb-3">
                                    <option selected>Selecciona direc.</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select> >
                            </td>
                            <td>
                                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            Edit
                          </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://cdn.pixabay.com/photo/2015/08/18/08/52/perfume-893475__480.jpg" class="rounded-circle" alt="" style="width: 150px; height: 150px" />
                                    <div class="ms-3">
                                        <h3 class="card-title">Calvin Klein 500ml Perfume</h3>
                                        <br>
                                        <br>
                                        <p class="card-text">
                                            Talla: 500ml
                                        </p>
                                        <p>
                                            Color: 500ml
                                        </p>
                                        <p>
                                            Fragancia: 500ml
                                        </p>
                                        <p>
                                            Marca: 500ml
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <select class="select-css mb-3">
                                <option selected>Selecciona la cant.</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                                <td>
                                    <select class="select-css mb-3">
                                <option selected>Selecciona direc.</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                            Edit
                          </button>
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-4" role="tabpanel" aria-labelledby="ex-with-icons-tab-4">
            Opción de regalo
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-5" role="tabpanel" aria-labelledby="ex-with-icons-tab-5">
            Envío
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-6" role="tabpanel" aria-labelledby="ex-with-icons-tab-6">
            Pago
            <!--Aqui va api del pago por OXXO-->
            <div>
                <img src="https://files.readme.io/d47e11c-es-oxxopay-stub.png">
            </div>
        </div>
        <div class="tab-pane fade" id="ex-with-icons-tabs-7" role="tabpanel" aria-labelledby="ex-with-icons-tab-7">
            Confirmación
        </div>
    </div>
    <!-- Tabs content -->
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>

</html>