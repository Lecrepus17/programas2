<?php
    require('verificalogin.php');
    require('twig_carregar.php');

    echo $twig->render('boasvindas.html', [
        'user' => $_SESSION['user'],
        ]);