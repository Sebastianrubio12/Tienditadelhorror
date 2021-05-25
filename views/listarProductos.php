<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de licores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="bg-dark">
    <!-- Conexion BD -->
    <?php

    if (!isset($_SESSION)) {
        session_start();
    }
    include("../servidor/buscarDatos.php");

    ?>
    <!-- Conexion BD -->


   
  <?php if(isset($_SESSION["mensaje"])):?>

        <section>
            <div class="modal fade" id="ventanaMensaje" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header bg-info">
                            <h5 class="modal-title">Reporte</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <p><?=$_SESSION["mensaje"]?></p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script type="module" src="../public/Scripts/lanzarModal.js"></script>

        <?php unset($_SESSION["mensaje"]) ?>

    <?php endif ?> 

    <!-- <?php if(isset($_SESSION["mensaje"])):?>
            <h2 class="text-white"><?= $_SESSION["mensaje"] ?></h2>
    <?php endif ?> -->



    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
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
                                            class="bi bi-person"></i>Inicar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar -->
    </header>

    <main class="mt-5">
           <!-- Productos -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mb-5">
                    <h1 class="text-center text-white">PRODUCTOS DE LA TIENDA</h1>
                    <hr class="bg-white">
                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($productos as $producto) : ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?= $producto["url_foto"] ?>" class="card-img-top" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto["nombre"] ?></h5>
                            <p class="card-text">$<?= $producto["precio"] ?></p>
                            <a href="" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#mensaje<?= $producto["Id"] ?>"><i class="fas fa-trash-alt"></i></a>
                            <a href="" class="btn btn-outline-warning" data-bs-toggle="modal"
                                data-bs-target="#editar<?= $producto["Id"] ?>"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>


                    <!-- section para eliminar -->
                    <section>
                        <!-- Modal -->
                        <div class="modal fade" id="mensaje<?= $producto["Id"] ?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar
                                            <?= $producto["nombre"] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <img src="<?= $producto["url_foto"] ?>" alt="imagenProducto"
                                                    class="img-fluid">
                                                <h5><?= $producto["nombre"] ?></h5>
                                                <h6>$<?= $producto["precio"] ?></h6>
                                            </div>
                                            <div class="col-8 text-start align-self-center">
                                                <p>¿Está seguro de eliminar de la BD este producto?</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <a href="../servidor/eliminarDatos.php?Id=<?php echo ($producto["Id"]) ?>"
                                            type="button" class="btn btn-danger">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- section para editar -->
                    <section>
                        <div class="modal fade" id="editar<?= $producto["Id"] ?>" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header bg-warning text-white">
                                        <h5 class="modal-title">Editar Producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-4 text-center align-self-center">
                                                <img src="<?= $producto["url_foto"] ?>" alt="imagenProducto"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-8 text-start align-self-center">
                                                <form action="../servidor/editarDatos.php?Id=<?= $producto["Id"] ?>"
                                                    method="POST">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nombre</label>
                                                        <input type="text" class="form-control"
                                                            value="<?= $producto["nombre"] ?>" name="nombreEditar">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Precio</label>
                                                        <input type="number" class="form-control"
                                                            value="<?= $producto["precio"] ?>" name="precioEditar">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Foto URL</label>
                                                        <input type="text" class="form-control"
                                                            value="<?= $producto["url_foto"] ?>" name="fotoEditar">
                                                    </div>
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-warning" type="submit"
                                                            name="botonEditar">Aceptar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- prdoductos -->
    </main>
    




    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>