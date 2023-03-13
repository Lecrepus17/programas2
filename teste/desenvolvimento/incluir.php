<?php

$img = $_FILES['imagem'];
    $extensao = strtolower(substr($img['name'], -4));
    $diretorio = 'assets/imagem/';
    
    move_uploaded_file($img['tmp_name'], $diretorio . $img['name']);

    require('pdo.inc.php');

function InsereJogador($nome, $ano_inicio,  $ano_fim, $preco, $descricao, $imagem)
{
    try {


        //Realiza o INSERT DOS JOGADORES
        $sql = $conex->prepare("INSERT INTO locais (nome, imagem, data_inicio, data_fim, descricao, preco) VALUES
                (:nome, :imagem, :ano_inicio,  :ano_fim, :descricao, :preco)");

        $sql->bindParam(':nome', $nome);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':user', $user);
        $sql->bindParam(':pass', $pass);
        $sql->bindParam(':admin', $admin);
      

        $sql->execute();

        header('location:login.php');


    
    } catch (Exception $e) {
            $mysqli->rollback();

        exit("Erro no banco de dados: " . $e->getMessage());
    }
}

InsereJogador( $_POST['nome'], $_POST['data_inicio'], $_POST['data_fim'], $_POST['preco'], $_POST['descricao'], $diretorio.$img['name']);
    // Redireciona para a página inicial
    header('Location: index.php');


    ?>



<?php
    require('pdo.inc.php');
    $nome = $_POST['nome'] ?? false;
    $email = $_POST['email'] ?? false;
    $user = $_POST['user'] ?? false;
    $pass = $_POST['pass'] ?? false;
    $admin = $_POST['admin'] ?? false;

    if(!$user or !$pass){
        header('location:novo_usuario.php');
        die;
    }

    $pass = password_hash($pass, PASSWORD_BCRYPT);

    $sql = $conex->prepare('INSERT INTO usuarios (nome, email, username, senha, admin, ativo) VALUES (:nome, :email, :user, :pass, :admin, 1)');

    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':user', $user);
    $sql->bindParam(':pass', $pass);
    $sql->bindParam(':admin', $admin);

    $sql->execute();

    header('location:login.php');