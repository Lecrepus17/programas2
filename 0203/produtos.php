<?php
    require('verificalogin.php');
    require('twig_carregar.php');
    require('pdo.inc.php');
    require('models/Model.php');
    require('models/Produto.php');

    $pdt = new Produto();
    $produto = $pdt->getALL(['ativo' => 1]);

    echo $twig->render('produtos.html', [
        'produto' => $produto,
   
        ]);



