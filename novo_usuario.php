<?php


?>

<form method="post" action="novo_usuario_gravar.php">
    <div><input type="text" name="nome" placeholder="Seu nome"></div>
    <div><input type="email" name="email" placeholder="E-mail"></div>
    <div><input type="text" name="user" placeholder="Usuário"></div>
    <div><input type="password" name="pass" placeholder="Senha"></div>
    <div>Aluno<input type="checkbox" name="adm" value="1"></div>
    <div>Admin<input type="checkbox" name="adm" value="0"></div>

    <div><input type="submit" value="Gravar"></div>

</form>