<?php
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
   
    $id= $_POST['id'];
    $sql = " DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) :
        
        $_SESSION['mensagem']  = "Deletado com sucesso!";
        header('Location: ../indexcrud.php');

    else:
        $_SESSION['mensagem']  = "Erro ao cancelar";
        header('Location: ../indexcrud.php');
    endif;

endif;
