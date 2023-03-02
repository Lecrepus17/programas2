<?php

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == 'pedro' && $pass == '123'){
        header('location:boasvindas.php');
        die;
    } else {
        header('location:login.php?erro=1');
    }