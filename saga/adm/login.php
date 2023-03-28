<?php
  include "../adm/controle.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
<div class="login p-5 mt-5">
    <hr>
    <div class="row">
        <center>
        <form name="form" method="post" action="#">
        
            <div class="mb-3">
                <label for="login" class="form-label" name="login" required> Login </label>
                <input type="text" class="form-control" id="login" name="login" required>   
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label" name="senha" required> Senha </label>
                <input type="password" class="form-control" id="senha" name="senha" required>   
            </div>
            
                <button type="submit" class="btn btn-primary"> ENTRAR </button>
                                    
        </form>
        </center>

            <div class="mt-5 text-danger text-center">
            <?php
            include "valida.php";
            
    

            ?>

            </div>
            
    </div>
</div>
<?php
    include "../adm/rodape.php";
?>
