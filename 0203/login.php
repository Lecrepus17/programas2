<?php
    require('twig_carregar.php');

    $erro = $_GET['erro'] ?? false;

    echo $twig->render('login.html', [
        'deu_erro' => $erro,
        //pode ser só erro
    ]);