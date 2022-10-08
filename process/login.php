<?php
    include('./connect.php');
    if(isset($_POST['email']) and isset($_POST['senha'])){
        $email = $con -> real_escape_string(strip_tags($_POST['email']));
        $senha = $con -> real_escape_string(strip_tags($_POST['senha']));
        $r = $con -> query("select id,sec,token from users where email='{$email}' and senha='{$senha}'");
        if($r -> fetch_row() >= 1){}
        else {
            die(header('HTTP/1.0 404 Usuario inesistente ou dados invalidos'));
        }
    }
    else {
        die(header('HTTP/1.0 404 Erro 0'));
    }
?>