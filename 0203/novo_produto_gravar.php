<?php
    require('models/Model.php');
    require('models/Produto.php');
    
    $nome = $_POST['nome'] ?? false;




    $pdt = new Produto();
    $pdtr->create([
        'nome' => $nome,

        'ativo' => 1,
    ]);

    header('location:/produtos');


