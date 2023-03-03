<?php

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == 'pedro' && $pass == '123'){
        session_start();
        $_SESSION['user'] = 'Pedro';
        header('location:boasvindas.php');
        die;
    } else {
        header('location:login.php?erro=1');
    }