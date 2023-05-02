<?php
require('twig_carregar.php');
require('pdo.inc.php');

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = $conex->prepare('INSERT INTO produto (nome, preco) value(:nome, :preco)');

$sql->bindParam(':nome', $nome);
$sql->bindParam(':preco', $preco);

$sql->execute();


//$produto = $sql->fetch(PDO::FETCH_ASSOC);
echo $twig->render('produtos.html', [
    'produtos' => $sql,
]);



?>