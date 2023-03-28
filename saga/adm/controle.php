<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saga Games</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-fluid bg-dark text-white p-3">
        <div class="row">
            <div class="col text-star logo">

                <a href='../adm/index.php'> <img src="../img/logo70.png" alt="Saga games"></a>

            </div>
            <div class="col text-center">
                <div class="search">
                    <form class="d-flex" role="search">

                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">

                        <button class="btn botao2" type="submit">Search</button>

                    </form>
                </div>
            </div>
            <div class="col text-end">

                <?php
                if(!isset($_SESSION)){
                session_start(); //iniciando a sessão
                }


             if(isset($_SESSION['login'])){
            $login = $_SESSION['login'];
            $nome = $_SESSION['nome'];
            $nivel = $_SESSION['nivel'];

              echo "bem-vindo, $nome | ";
              if($nivel == "adm"){

              echo "<a href='../adm/adm.php'> ADMINISTRAÇÃO </a> |";
              }

              echo "<a href='../adm/logout.php'> Logout </a>";
              
            }else{

                ?>

                <div class="button">
                    <a href='../adm/login.php'><button type="entrar" class="btn botao">Entrar</button></a> |
                    <a href="../usuario/usuario.php"><button type="cadastrar" class="btn botao">Cadastrar</button></a>
                </div>
                <div vw class="enabled">
           <div vw-access-button class="active"></div>
           <div vw-plugin-wrapper>
               <div class="vw-plugin-top-wrapper"></div>
           </div>
       </div>
       <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
       <script>
       new window.VLibras.Widget('https://vlibras.gov.br/app');
       </script>

    <script src="assets/js/main.js"></script>
                <?php } ?>
            </div>
        </div>
    </div>