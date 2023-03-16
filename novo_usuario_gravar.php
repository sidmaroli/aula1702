<?php
require('pdo.inc.php');

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

$sql = $pdo->prepare('INSERT INTO usuarios (nome, email, username, senha, admin, ativo) VALUES(:nome, :email, :user, :pass, :admin, 1)');

$sql->bindParam(':user', $user);
$sql->bindParam(':pass', $pass);
$sql->bindParam(':nome', $nome);
$sql->bindParam(':email', $email);
$sql->bindParam(':admin', $admin);


$sql->execute();

header('location: login.php');
