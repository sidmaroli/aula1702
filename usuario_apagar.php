<?php

require('twig_carregar.php');
require('pdo.inc.php');

//Rotina POST - Apagar usuario
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Modifica o usuário para ativo = 0
    $id = $_POST['id'] ?? false;
    if($id){
        $sql = $pdo->prepare('UPDATE usuarios SET ativo = 0 WHERE id = ?');
        $sql->execute([$id]);
    }
    header('location: usuarios.php');
    die;
}


//Rotina de GET - mostra imformções na tela
$id = $_GET['id'] ?? false;
$sql = $pdo->prepare('SELECT * FROM usuarios WHERE id = ?');
$sql->execute([$id]);
$usuario = $sql->fetch(PDO::FETCH_ASSOC);

echo $twig->render('usuario_apagar.html', [
    'usuario' => $usuario,
]);