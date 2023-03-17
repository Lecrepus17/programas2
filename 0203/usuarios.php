<?php
    require('verificalogin.php');
    require('twig_carregar.php');
    require('pdo.inc.php');

 try {
      
    $sql = $conex->query("SELECT * FROM  usuarios WHERE ativo = 1");
        $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
 
        exit("Erro no banco de dados: " . $e->getMessage());
    }


    echo $twig->render('usuarios.html', [
        'user' => $usuarios,
   
        ]);

