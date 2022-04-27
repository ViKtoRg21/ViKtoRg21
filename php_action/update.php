<?php
//Sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' , idade '$idade' WHERE id = '$id'";

    if(mysqli_query($connect,$slq)):
        $_SESSION['Mensagem'] = "Atualizado com sucesso!";
        header('location: ../index.php');
    else:
        $_SESSION['Mensagem'] = "Erro ao atualizar";
        header('location: .../index.php');
    endif;
endif;
