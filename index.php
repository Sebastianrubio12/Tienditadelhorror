<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licoreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body style="position: relative;" data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="10"
    tabindex="0">

    <header>
        <!-- Navbar -->
        <nav id="navbar-example3" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
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
                            <a href="#inicio" class="nav-link" aria-current="page">Servicios</a>

                        </li>
                        <li class="nav-item">
                            <a href="#comentarios" class="nav-link" aria-current="page">Comentarios</a>

                        </li>
                        <li class="nav-item">
                            <a href="#suscribete" class="nav-link" aria-current="page">Suscribete</a>

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
                                <li><a class="dropdown-item" href="../views/login.php" target="_blank"><i
                                            class="bi bi-person"></i>Inicar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- navbar -->

        <!-- Banner -->
        <section id="banner">

            <div>
                <h1 class="text-center ">??BIENVENIDOS CATADORES!</h1>
                <hr class="p-1 my-5 bg-white">
            </div>

        </section>
        <!-- Banner -->
    </header>

    <!-- principal -->
    <main class="bg-dark text-white py-5">

        <div id="inicio" class="container ">
            <div class="row">
                <div class="col-12">
                    <!-- slider -->
                    <section id="registrarProductos.php">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="public/img/img1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/img2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/img3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/img4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="public/img/img6.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>



                    </section>
                    <!-- slider -->
                </div>
            </div>
        </div>
        <!-- Servicios -->
        <div class="container">
            <div class="text-center py-5 text-white">
                <i class="bi bi-star-fill h1"></i>
                <i class="bi bi-star-fill h1"></i>
                <i class="bi bi-star-fill h1"></i>
                <i class="bi bi-star-fill h1"></i>
                <i class="bi bi-star-fill h1"></i>
            </div>
            <h2 class="text-center display-4 mb-5">Servicios</h2>

            <div class="row align-items-center">
                <div class="col-12 col-lg-4">
                    <h5>La licorera con m??s tradici??n</h5>

                    <hr>
                    <p>Licores de la mejor calidad, nacionales e importados, aguardiente, ron, whisky, tequila, vodka,
                        vino, ginebra, champa??a, cerveza, cog??ac, gin tonic, bases para cocteles. 100% garant??a. La
                        mejor tienda

                        Solicita tu domicilio y consulta nuestras promociones a trav??s de nuestro sitio web - Vendemos
                        en consignaci??n para fiestas y eventos con la garant??a de devolver el dinero de lo que no se
                        consuma - Garantizamos la calidad de nuestros licores - Atendemos domingos y festivos !ll??manos??
                    </p>


                    <button class="btn btn-outline-light mb-5 mb-lg-0">Leer mas</button>
                </div>
                <div class="col-12 col-lg-8">
                    <img src="public/img/img2.jpg" alt="" class="img-fluid rounded">
                </div>
            </div>

        </div>
        <!-- Servicios -->

    </main>
    <!-- principal -->

    <!-- Comentarios -->
    <section id="comentarios" class="py-5 bg-ligth text-dark">
        <div class="container">
            <div class="text-center py-5">
                <i class="bi bi-chat-right-dots h1"></i>
            </div>
            <h2 class="text-center mb-5 display-4">Comentarios</h2>
            <p class="lead mb-5 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptas
                vitae blanditiis, cupiditate debitis qui neque sequi error tenetur quo maiores cumque iusto porro nam
                est recusandae dolorem. Enim, nisi!</p>


            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-md-0">
                    <img src="public/img/perfil1.jpg" class="img-fluid rounded" alt="perfil">
                </div>
                <div class="col-12 col-md-6 col-lg-8 col-xl-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Comentarios -->

    <!-- Suscribete -->
    <section id="suscribete" class="py-5 text-light bg-secondary">
        <div class="container">
            <div class="text-center py-5 h1">
                <i class="bi bi-credit-card"></i>
            </div>
            <h2 class="text-center mb-5 display-4">Suscribete</h2>

            <p class="lead text-center pb-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, ipsa ratione dicta quidem laboriosam
                rem beatae hic doloribus quod tempora eaque eos earum modi vitae. Nesciunt accusantium soluta excepturi
                quos.
            </p>

            <div class="row">
                <div class="col-12 col-md-4 mb 5">
                    <div class="card text-center text-dark">
                        <div class="card-body">
                            <h2 class="my-5">$100</h2>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal3">Suscribete</button>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-md-4 mb 5">
                    <div class="card text-center text-dark">
                        <div class="card-body">
                            <h2 class="my-5">$500</h2>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal2">Suscribete</button>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-md-4 mb 5">
                    <div class="card text-center text-dark">
                        <div class="card-body">
                            <h2 class="my-5">$1000</h2>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-outline-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">Suscribete</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Suscribete -->

    <!-- modal 1 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel1">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal 1 -->

    <!-- modal 2 -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel2">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal 2 -->

    <!-- modal 3 -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel3">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- modal 3 -->



    <!-- footer -->
    <footer class="bg-dark">

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 p-5 text-end text-white ">

                    <p>Licoreria los Jimenez</p>
                    <p>Medell??n-Colombia</p>
                  

                </div>
                <div class="col-6 p-5 text-white">
                    <div class="col-12 text-white">
                        <a href=""><i class="fab fa-facebook-f h2 text-white"></i></a>
                        <a href=""><i class="fab fa-twitter h2 text-white"></i></a>
                        <a href=""><i class="fab fa-instagram h2 text-white"></i></a>
                    </div>
                    <p>&#9751; licorerialosJimenez@gmail.com</p>
                    <p> Contacto: 3113673481</p>

                </div>
                <hr>
                <p class="text-center">EL EXCESO DE ALCOHOL ES PERJUDICIAL PARA LA SALUD. PROH??BASE EL EXPENDIO DE
                    BEBIDAS EMBRIAGANTES A MENORES DE
                    EDAD."
                </p>
                <p class="text-center"> Un producto TRADE CMR S.A.S | Todos los derechos reservados &copy; 2022</p>
            </div>
        </div>
        </div>



    </footer>
    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script src="js/fontawesome.min.js"></script>

</body>

</html>