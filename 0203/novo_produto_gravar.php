<?php
    require('models/Model.php');
    require('models/Produto.php');
    require('func/sanitize_filename.php');
    require('func/verifica_nome_arquivo.php');

    $nome = $_POST['nome'] ?? false;

    $arquivo = sanitize_filename($_FILES['arquivo']['name']);

    $arquivo = verifica_nome_arquivo('uploads/',$arquivo);

    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/' . $arquivo);


    $pdt = new Produto();
    $pdt->create([
        'nome' => $nome,

        'ativo' => 1,
    ]);

    header('location:/produtos');


