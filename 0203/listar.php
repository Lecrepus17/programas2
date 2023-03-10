<?php
    require('pdo.inc.php');





    $sql = $conex->prepare('SELECT * FROM usuarios');
    $sql->execute();
    
    $sql = $sql->fetch(PDO::FETCH_OBJ);


    echo $sql->nome;