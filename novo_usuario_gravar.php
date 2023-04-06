<?php
require('models/Model.php');
require('models/Usuario.php');

$nome = $_POST['nome'] ?? false;
$user = $_POST['user'] ?? false;
$email = $_POST['email'] ?? false;
$pass = $_POST['pass'] ?? false;
$admin = $_POST['admin'] ?? false;

if(!$user || !$pass){
    header('location: novo_usuario.php');
    die;
}

$pass = password_hash($pass, PASSWORD_BCRYPT);

$usr = new Usuario();
$usr->create([
    'nome' => $nome,
    'username' => $user,
    'email' => $email,
    'senha' => $pass,
    'admin' => $admin,
    'ativo' => 1,
]);

header('location: usuarios.php');
