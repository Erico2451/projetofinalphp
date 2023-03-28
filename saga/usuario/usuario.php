<?php
    include "../adm/controle.php";
?>
<div class="usuario p-3 mt-5">
        
        <h1 class='text-center'> </h1>
        <hr>
    <form name="cadastro" method="post" action="cadastrar_usuario.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required>
            </div>  
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="****" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@provedor.com" required>
            </div> 
            <hr class="mt-5 mb-4">
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
    </form>
</div>    
<?php
    include "../adm/rodape.php";
?>
    