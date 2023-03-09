<?php
    require('pdo.inc.php');


    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //cria a consulta e aquarda os dados
    $sql = $conex->prepare('select * from usuarios where username = :usr and senha = :pass');


    //adiciona os dados na consulta
    $sql->bindParam(':usr', $user);
    $sql->bindParam(':pass', $pass);

    //Roda a consulta
    $sql->execute();


   
    //se encontrou o usuario
    if($sql->rowCount()){
        //login feito com sucesso
        $user = $sql->fetch(PDO::FETCH_OBJ);

        session_start();
        $_SESSION['user'] = $user->nome;


        header('location:boasvindas.php');
        die;
    } else {
        header('location:login.php?erro=1');
    }