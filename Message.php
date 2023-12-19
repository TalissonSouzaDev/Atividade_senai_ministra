<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <style>
        .message {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .message img {
            width: 600px;
        }

        .message-sucess span {
            color: green;
            font-size: 55px;
            margin-bottom: 15px;
        }

        .message a {
            text-decoration: none;
            font-size: 25px;
            color: black;
        }

        .message h1 {
            color: brown;
            font-size: 45px;
        }
    </style>
</head>

<body>


    <?php if (@$_SESSION['dados']) : ?>
        <div class="message">
            <img src="img/sucess.png" alt="" srcset="">
            <span>Óla!, <?= $_SESSION['dados']['nome'] ?> <?= $_SESSION['dados']['message'] ?> </span>
            <?php if (@!empty($_SESSION['dados']['cpf'])) :  ?>
                <ul>
                    <li>Nome: <?= $_SESSION['dados']['nome'] ?></li>
                    <li>E-mail: <?= $_SESSION['dados']['email'] ?></li>
                    <li>Telefone: <?= $_SESSION['dados']['telefone'] ?></li>
                    <li>Data de nascimento: <?= date('d/m/Y', strtotime($_SESSION['dados']['dt_nasc'])) ?></li>
                    <li>CPF: <?= strrev(preg_replace('/\d/', '*',  strrev($_SESSION['dados']['cpf']), 4)); ?></li>
                </ul>
                <a href="index.php">Volta Para Home</a>

        </div>
    <?php else : ?>
        <ul>
            <li>Nome: <?= $_SESSION['dados']['nome'] ?></li>
            <li>E-mail: <?= $_SESSION['dados']['email'] ?></li>
            <li>Telefone: <?= $_SESSION['dados']['telefone'] ?></li>

        </ul>
        <a href="index.php">Volta Para Home</a>


    <?php endif; ?>

<?php else : ?>
    <div class="message">
        <h1>Not Found 404 </h1>
        <a href="index.php">Volta Para Home</a>
    </div>

<?php endif; ?>


</body>


</html>