<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == 'ale' && $pass == '123'){
    //Login foito com sucesso

    //Cria uma sessão para armazenar o usuário
    session_start();
    $_SESSION['user'] = 'Ale';

    //Redireciona 
    header('location: boasvindas.php');
    die;
} else {
    //Falha no login
    header('location: login.php?erro=1');
    die;
}