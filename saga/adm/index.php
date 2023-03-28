<?php
    include "../adm/controle.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saga Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container  mt-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 bg-dark cor">
                <div class="row mt-5">
                    <div class="col-4 imagem text-end">
                        <a href=''><img src="../img/xboxc.png" alt=""></a>
                    </div>
                    <div class="col-5 xbox text-start mt-3">
                        <h3>Xbox</h3>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-4 imagem text-end">
                        <a href=''><img src="../img/PLAY.png" alt="PLayStation"></a>
                    </div>
                    <div class="col-6 xbox text-start mt-3">
                        <h3>PlayStation</h3>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-4 imagem text-end">
                        <a href=''><img src="../img/Nintendo.png" alt="Nintendo"></a>
                    </div>
                    <div class="col-6 xbox text-start mt-3">

                        <h3>Nintendo</a></h3>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col-4 imagem text-end">
                        <a href=''><img src="../img/janela.png" alt="Windows"></a>
                    </div>
                    <div class="col-6 xbox text-start mt-3">
                        <h3>Windows</h3>
                    </div>

                </div>
                <div class="row mt-5">

                    <div class="col-12 xbox text-center mt-3">
                        <a href='../adm/login.php'><button type="entrar" class="btn botao">QUEM SOMOS</button></a>
                    </div>

                </div>

            </div>

                <div class="col-12 col-md-6 col-lg-9">
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../img/fortinite.jpg" class="d-block w-100" alt="imagem fortinite">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/fifacarrossel.jpg" class="d-block w-100" alt="fifa">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../img/Zeldacarr.jpg" class="d-block w-100" alt="Zelda">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="../img/halo350x400.png" class="card-img-top" alt="Halo Infint">
                                <div class="card-body">
                                    <h5 class="card-title">Halo Infint</h5>
                                    <p class="card-text">Data de Lançamento 15 de novenbro de 2021</p>
                                    <a href="telahalo.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="../img/fortinaite350x400.png" class="card-img-top" alt="Fortinite">
                                <div class="card-body">
                                    <h5 class="card-title">Fortinite</h5>
                                    <p class="card-text">Data de Lançamento 21 de julho 2017</p>
                                    <a href="telafortnit.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="../img/zelda350x400.png" class="card-img-top" alt="Zelda">
                                <div class="card-body">
                                    <h5 class="card-title">Zelda</h5>
                                    <p class="card-text">Data de Lançamento 20 de setembro de 2019</p>
                                    <a href="telazelda.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card">
                                <img src="../img/fifa350x400.png" class="card-img-top" alt="Fifa">
                                <div class="card-body">
                                    <h5 class="card-title">Fifa</h5>
                                    <p class="card-text">Data de Lançamento 27 de setembro de 2021</p>
                                    <a href="telafifa.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
</html>

<?php
    include "../adm/rodape.php";
?>