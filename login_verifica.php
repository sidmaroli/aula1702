<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == 'ale' && $pass == '123'){
    //Login foito com sucesso;
    header('location: boasvindas.php');
    die;
} else {
    //Falha no login
    header('location: login.php?erro=1');
    die;
}