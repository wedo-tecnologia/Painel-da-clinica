<?php
    include('../vendor/autoload.php');
    $server_con = '{imap.gmail.com:993/imap/ssl}INBOX';
    $user = '';
    $senha = '';
    $email = imap_open($server_con,$user,$senha);
    echo imap_num_msg($email);
?>