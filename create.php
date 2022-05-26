<?php
session_start();

// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) : // CASO COLOQUE STRING EM IDADE, NÃO SALVA E RETORNA PRA INDEX
	    $_SESSION['mensagem'] = "Formato de idade inválido";
		header('Location: ../indexcrud.php');
    else:
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
        $sql = "INSERT INTO clientes(nome,sobrenome,email,idade) VALUES ('$nome', '$sobrenome','$email', '$idade') "; // INSERE AS INFORMAÇÕES NO BANCO DE DADOS

    if (mysqli_query($connect, $sql)) :  // para verificar se conseguiu inserir no banco de dados
        
        $_SESSION['mensagem']  = "Cadastrado com sucesso!";
        header('Location: ../indexcrud.php');

    else:
        $_SESSION['mensagem']  = "Erro ao cadastrar";
        header('Location: ../indexcrud.php');
    endif;
endif;
endif;

