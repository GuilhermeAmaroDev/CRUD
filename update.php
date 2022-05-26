<?php
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) :
	    $_SESSION['mensagem'] = "Formato de idade inválido";
		header('Location: ../indexcrud.php');
    else:
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $id= $_POST['id'];
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) :
        
        $_SESSION['mensagem']  = "Atualizado com sucesso!";
        header('Location: ../indexcrud.php');

    else:
        $_SESSION['mensagem']  = "Erro ao atualizar";
        header('Location: ../indexcrud.php');
    endif;
endif;
endif;
