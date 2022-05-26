<?php

include_once 'php_action/db_connect.php'; // CONEXÃO
include_once 'includes/header.php';  // ACRESCENTA O HEADER
include_once 'includes/mensagem.php'; // INCLUI A MENSAGEM
 
?>


<div class="row">
    <div class="col s12 m6 push-m3">   <!-- DEFINE A LARGURA EM COLUNAS, s12(IPHONE) e m6(tablets) - m3 pra compensar o 3 nas laterais e centralizar o elemento -->
        <h3 class="light"> Clientes</h3> <!-- TITULO DA TABELA, LIGHT PRA DEIXAR MAIS SUAVE -->
        <table class="striped"> 
        <thead>
                <th>Nome:</th> <!-- ESTRUTURA DA TABELA -->
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>
                
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM clientes";
            $resultado = mysqli_query($connect, $sql);
            
            while($dados = mysqli_fetch_array($resultado)):
            
            ?>
            <tr>        
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['sobrenome']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['idade']; ?></td>
                <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating purple"><i class ="material-icons">edit</i></a></td> <!-- botão de editar -->
                <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class ="material-icons">delete</i></a></td> <!-- botão de deletar -->
           
                <!-- Modal Estrutura -->
             <div id="modal<?php echo $dados['id']; ?>" class="modal">
                <div class="modal-content">
                     <h4>Opa</h4>
                     <p>Tem certeza que deseja excluir esse cliente?</p>
                        </div>
                     <div class="modal-footer">
                
                    <form action="php_action/delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>"> 
                        <button type="submit" name="btn-deletar" class="btn red">Sim, desejo deletar</button>

                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

                         </form>

                 </div>
             </div>
            
            </tr>
                <?php endwhile; ?>
    </tbody>

</table>
<br>
<a href="adicionar.php" class="btn">Adicionar cliente</a>

<?php

include_once 'includes/footer.php';  // ACRESCENTA O FOOTER

?>