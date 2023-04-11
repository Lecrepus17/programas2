<?php
    require('models/Model.php');
    require('models/Usuario.php');
    
    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
    $user = $_POST['username'] ?? false;
    $id = $_POST['id'] ?? false;

    $usr = new Usuario();
    $usr->update([
        'username' => $user,
        'nome' => $nome,
        'email' => $email,
    ], $id);

    header('location:usuarios.php');


