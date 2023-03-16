<?php
    require('verificalogin.php');
    require('twig_carregar.php');
    require('pdo.inc.php');

 try {
      
    $sql = $conex->query("SELECT * FROM  usuarios");
        $usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
            $mysqli->rollback();

        exit("Erro no banco de dados: " . $e->getMessage());
    }


    echo $twig->render('usuarios.html', [
        'user' => $usuarios,
   
        ]);

