<?php
include_once 'includes/header.php';  // ACRESCENTA O HEADER

 // A SEGUNDA DIV DEFINE A LARGURA EM COLUNAS, s12(IPHONE) e m6(tablets) - m3 pra compensar o 3 nas laterais e centralizar o elemento
?>

<div class="row">
    <div class="col s12 m6 push-m3">    
        <h3 class="light"> Novo Cliente</h3>
        <form action="php_action/create.php" method="POST">
            <div class="input-field col s12"> <!-- MANTÉM A ESTRUTURA DO MATERIALIZE -->
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                <input type="text" name="idade" id="idade">
                <label for="idade">Idade</label>
                </div>
                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="indexcrud.php" class="btn blue">Lista de clientes</a> <!-- link para retornar pra index -->
            </form>
<?php

include_once 'includes/footer.php';  // ACRESCENTA O FOOTER

?>