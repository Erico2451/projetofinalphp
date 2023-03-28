<?php

if(!isset($_SESSION)){
session_start();

}
if(!isset($_SESSION['login'])){
    echo "
    <script>
    alert('Area restrita a usuários logados.
    Informe o seu Login e Senha.');
    window.location = '../adm/login.php';
    </script>
    
    ";
}

?>