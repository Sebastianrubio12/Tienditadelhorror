<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de licores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    include("../servidor/buscarDatos.php");

    ?>




    <main class="mt-5">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-white">PRODUCTOS DE LA TIENDA</h1>
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
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#mensaje<?= $producto["Id"] ?>"> eliminar</a>
                            </div>
                        </div>


                        <!-- section para eliminar -->
                        <section>
                            <!-- Modal -->
                            <div class="modal fade" id="mensaje<?= $producto["Id"] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar <?= $producto["nombre"] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col text-center">
                                                <img src="<?=$producto["url_foto"]?>" alt="imagenProducto" class="img-fluid">
                                                    <h5><?= $producto["nombre"] ?></h5>
                                                    <h6>$<?= $producto["precio"] ?></h6>
                                                </div>
                                                <div class="col-8 text-start align-self-center">
                                                    <p>¿Está seguro de eliminar de la BD este producto?</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <a href="../servidor/eliminarDatos.php?Id=<?php echo($producto["Id"])?>" type="button" class="btn btn-danger">Aceptar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <!-- section para editar -->
                        <section>
                        </section>




                    </div>
                <?php endforeach ?>
            </div>



        </div>


    </main>





    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>