<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-producto</title>
    <link rel="stylesheet" href="../public/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body class=" text-white bg">

    <header>
        <!-- Navbar -->
        <nav class=" navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container">
                <a href="../index.php" class="navbar-brand">
                    <i class="fas fa-wine-glass-alt"></i>
                    <span class="align-middle">LICORERIA LOS JIMENEZ</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                        <li class="nav-item">
                            <a href="../index.php" class="nav-link" aria-current="page">Inicio</a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../views/registrarProductos.php"><i
                                            class="bi bi-bag-plus "></i>Registrar Productos</a></li>
                                <li><a class="dropdown-item" href="../views/listarProductos.php"><i
                                            class="bi bi-bag-check-fill"></i>Lista de productos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../views/login.php"><i
                                            class="bi bi-person"></i>Inicar
                                        Sesion</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar -->
    </header>
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrarproducto.php">Registrar Producto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search</button>
            </form>
        </div>
    </div>
    </nav>


    </header>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-12 col-md-3">



                    <form class="mt-5 bg-white rounded p-5" method="POST" action="../servidor/recibirDatos.php">
                        <h3 class="text-dark text-center">REGISTRAR PRODUCTOS</h3>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre Producto"
                                    name="nombreProducto">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Marca" name="marcaProducto">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Precio" name="precioProducto">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="foto url" name="fotoProducto">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <textarea class="form-control" placeholder="Descripción Producto"
                                    name="descripcionProducto"></textarea>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-info btn-block mt-3"
                                name="botonRegistro">Registrar</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="bg-dark mt-5">

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 p-5 text-end text-white ">

                    <p>Licoreria los Jimenez</p>
                    <p>Medellín-Colombia</p>
                    

                </div>
                <div class="col-6 p-5 text-white">
                    <div class="col-12 text-white">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <p>&#9751; licorerialosJimenez@gmail.com</p>
                    <p> Contacto: 3113673481</p>

                </div>
            </div>
        </div>
        </div>



    </footer>
    <!-- footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>