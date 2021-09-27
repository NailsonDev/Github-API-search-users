<?php 

    include_once 'config.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="NailsonDev">
    <meta name="keywords" content="procurar usuarios, github search users, github, usuarios do github, nailson dev, nailson" />
    <meta name="robots" content="index">
    <meta name="theme-color" content="#6813ad">

    <meta property="og:title" content="Github - Search users" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo INCLUDE_PATH?>" />
    <meta property="og:image" content="<?php echo INCLUDE_PATH?>assets/img/icon.png" />
    <meta property="og:site_name" content="Criado por NailsonDev" />
    <meta property="og:description" content="" />

    <title>NailsonDev - Github</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,400,300,200,100' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH?>assets/img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>assets/css/style.css">
</head>
<body>

    <canvas class="container" id="container" role="main"></canvas>

    <div class="content">
        <h1 class="title">Nailson Dev</h1>
        <p class="desc">"Eleve seu conhecimento ao máximo com a programação!"</p>
    </div>

    <div class="container-max">
        <div class="content-max">
            <div class="form-group">
                <form class="formulario" id="formulario">
                    <input type="text" id="user_input" name="buscar-user" placeholder="Buscar usuário do github" autocomplete="off">
                    <button type="submit">Buscar</button>
                </form>
            </div>
            <div class="box-github" style="display: none;">

                <div class="github-user-item">

                </div>

            </div>
        </div>
    </div>


<div class="blur blurTop"><canvas class="canvas"id="blurCanvasTop"></canvas></div>
<div class="blur blurBottom"><canvas width="1000px" height="1000px" class="canvas" id="blurCanvasBottom"></canvas></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo INCLUDE_PATH?>assets/js/animation.js"></script>
<script src="<?php echo INCLUDE_PATH?>assets/js/script.js"></script>

</body>
</html>