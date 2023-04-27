<?php
    require('verificalogin.php');
    require('twig_carregar.php');
    require('pdo.inc.php');
    require('models/Model.php');
    require('models/Usuario.php');

    $usr = new Usuario();
    $usuarios = $usr->getALL(['ativo' => 1]);

    echo $twig->render('usuarios.html', [
        'user' => $usuarios,
   
        ]);

