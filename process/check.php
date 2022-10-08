<?php
    include('./connect.php');
    include('./timing.php');

    if(isset($_COOKIE['ID']) and isset($_COOKIE['TOKEN']) and isset($_COOKIE['SEC'])){
        $id = $_COOKIE['ID'];
        $token = $_COOKIE['TOKEN'];
        $sec = $_COOKIE['SEC'];
        $r = ($con -> query("select id,nome,online,criado from users where id = {$id} and token = '{$token}' and sec = {$sec} limit 1")) -> fetch_assoc();
        if(!$r){
            die(header('HTTP/0.1 404 x'));
        }
        else {
            $id = $r['id'];
            $nome = $r['nome'];
            $online = timing(strtotime($r['online']));
            $criado = date('d/m/Y',strtotime($r['criado']));
            $con -> query("update users set online = now() where id = {$id}");
        }
    }
    else {
        die(header('HTTP/0.1 404 x'));
    }
?>