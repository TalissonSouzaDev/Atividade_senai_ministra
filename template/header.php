<!DOCTYPE html>
<html lang="pt-br">

    <?php
    session_start();
    session_destroy(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link do css -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/headerfooter.css">
    <link rel="stylesheet" href="css/sections.css">
    <link rel="stylesheet" href="css/midiaquerys.css">

    <!-- 
    Link do CDNJS linkando o font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Luciana Santos | Ministra </title>
</head>

<body>
<div class="gov">
        <img src="img/govtec.png" alt="gov" srcset="" width="300">
        <img src="img/pcb.png" alt="gov" srcset="" width="100">
        </div>
    <header>
       
        
        <nav class="navbar">
            <!-- lista de icones de redes socias -->
            <ul class="icons">
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
            <!-- lista de menus -->
            <ul class="menus">
                <li><a href="#home">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#trajetoria">Trajetória</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#cadastro">Cadastro</a></li>
            </ul>
        </nav>


        <!-- Components do V-lib -->
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
    </header>