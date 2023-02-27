<?php
# produtos.php

    require('vendor/autoload.php');
        
    $loader = new \Twig\Loader\FilesystemLoader('./templates');

    $twig = new \Twig\Environment($loader);

    $template = $twig->load('produtos.html');

    $produtos = [
        [
            'nome' => 'chinelo',
            'preco' => 30,
        ],
        [
            'nome' => 'Camiseta',
            'preco' => 50,
        ],
        [
            'nome' => 'Boné',
            'preco' => 39.9,
        ],
        [
            'nome' => 'carro',
            'preco' => 3300.2,
        ],
    ];
    
    echo $template->render([
        'titulo' => 'titulo',
        'produtos' => $produtos,
        //'produtos' => null,
   ]);