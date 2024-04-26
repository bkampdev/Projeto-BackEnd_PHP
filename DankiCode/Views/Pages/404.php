<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
        img{
            width: 100%;
            max-width: 780px;
            margin: auto
        }
        body{
            background-color: #edaa25;
        }
        h2{
            display: flex;
            justify-content: center;
            color: #ccc7ae;
            font-family:"Montserrat" ;
            text-shadow: 2px 2px #337667;
        }
        .center{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }   
    </style>
</head>
<body>
    <img class="center" src="<?php echo INCLUDE_PATH_STATIC ?>images/404.png">
    <h2>Ops... A pagina não existe!</h2>
</body>
</html>