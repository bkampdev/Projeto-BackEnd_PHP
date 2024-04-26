<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>css/login.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar"></div>

    <div class="form-container">
        <div class="logo">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg">
            <p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social Danki Code.</p>
        </div>
        <div class="form-login">
            <form>
                <input type="text" name="login" placeholder="Email ou Telefone">
                <input type="password" name="senha" placeholder="Senha">
                <input type="submit" name="acao" >
            </form>
            <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar conta</a></p>
        </div>
    </div>

</body>
</html>