<?php
    

    require('twig_carregar.php');
    require('pdo.inc.php');

    // Rotina de POST - apagar o usuario
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'] ?? false;
        if ($id) {
        $sql = $conex->prepare("UPDATE usuarios SET ativo = 0 WHERE idusuarios = ?");
        $sql->execute([$id]);
        }
      header('location:/usuarios');
        die;
    }


    // rotina de GET - mostrar informações na tela
    $id = $_GET['id'] ?? false;
    try {
      
        $sql = $conex->prepare("SELECT * FROM  usuarios where idusuarios = ?");
        $sql->execute([$id]);
        $usuarios = $sql->fetch(PDO::FETCH_ASSOC);
    
        } catch (Exception $e) {
    
    
            exit("Erro no banco de dados: " . $e->getMessage());
        }
    
    echo $twig->render('usuario_apagar.html.', [
        'user' => $usuarios,
   
        ]);