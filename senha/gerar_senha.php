<?php

    $pass = $_POST['pass'] ?? false;

    if($pass){
        /**
        *Numca faça isso
        */
        //echo md5($pass);
        //echo sha1($pass);

        /**
         * faça isso
         */
        echo password_hash($pass, PASSWORD_BCRYPT, [
            'cost' => 10,
        ]);
    }

?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Criptografar">
</form>