<?php
    $con = mysqli_connect('127.0.0.1','root','','painel_clinica');
    $con -> query("SET @@time_zone = '-3:00';");
    date_default_timezone_set('America/Sao_Paulo');
?>