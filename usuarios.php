<?php
require('verifica_login.php');
require('twig_carregar.php');

require('models/Model.php');
require('models/Usuario.php');

$user = new Usuario();

echo $twig->render('usuarios.html',[
    'user' => $usuarios,
]);

?>
