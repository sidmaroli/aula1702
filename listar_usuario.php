<?php
require('pdo.inc.php');


$sql = $pdo->prepare('SELECT * FROM usuarios');

$sql->execute();
$sql = $sql->fetch(PDO::FETCH_OBJ);

echo $sql->nome;
echo "<br>";
echo $sql->senha;







?>


