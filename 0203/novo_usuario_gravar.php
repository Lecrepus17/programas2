<?php
    require('models/Model.php');
    require('models/Usuario.php');
    
    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
    $user = $_POST['user'] ?? false;
    $pass = $_POST['pass'] ?? false;
    $admin = $_POST['admin'] ?? false;

    if(!$user or !$pass){
        header('location:/novo_usuario');
        die;
    }

    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $usr = new Usuario();
    $usr->create([
        'nome' => $nome,
        'username' => $user,
        'senha' => $pass,
        'admin' => $admin,
        'ativo' => 1,
        'email' => $email,
    ]);

    header('location:/usuarios');


