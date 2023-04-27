<?php
    require('pdo.inc.php');


    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //cria a consulta e aquarda os dados
    $sql = $conex->prepare('SELECT * from usuarios where username = :usr AND ativo = 1');


    //adiciona os dados na consulta
    $sql->bindParam(':usr', $user);
    
    //Roda a consulta
    $sql->execute();


   
    //se encontrou o usuario
    if($sql->rowCount()){
        //login feito com sucesso
        $user = $sql->fetch(PDO::FETCH_OBJ);

        // verificar se a senha ta correta
        if(!password_verify($pass, $user->senha)){
            header('location:login.php?erro=1'); 
            die;
        }

        session_start();
        $_SESSION['user'] = $user->nome;


        header('location:/boasvindas');
        die;

    } else {
        header('location:login.php?erro=1');
        die;
    }