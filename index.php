<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./css/index.css'>
    <link rel='icon' href='./img/62cf060c295c4.png'>
    <title>Painel Clinica</title>
</head>
<body>
    <div class='org'>
        <div class='login'>
            <div class='login_img'>
                <img src='./img/62cf060c295c4.png'>
            </div>
            <form method="POST" id='login'>
                <div class='login_form'>
                    <div class='campo title_campo'>Login</div>
                    <div class='campo'><input type='email' name='email' placeholder='E-mail' required></div>
                    <div class='campo'><input type='password' name='senha' placeholder='Senha' required></div>
                    <div class='campo'><button type='submit'>Login</button></div>
                </div>
            </form>
        </div>
    </div>
    <?php
        include('./includes/scripts.php');
    ?>
    <script src='./js/index.js'></script>
</body>
</html>