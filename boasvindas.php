<?php
require('verifica_login.php');
require('twig_carregar.php');



    //$sql = $pdo->query('SELECT * FROM usuarios');
    //$usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    
 
 echo $twig->render('boasvindas.html', [
     'user' => $_SESSION['user'],
 ]);
 