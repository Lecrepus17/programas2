<?php

$img = $_FILES['imagem'];
    $diretorio = 'assets/imagem/';
    move_uploaded_file($img['tmp_name'], $diretorio . $img['name']);



/*
//Realiza o INSERT DOS niveis de ensino
function Insere_nivel($nome_nivel)
{
    try {
        $sql = $conex->prepare("INSERT INTO nivel_ensino (nome) VALUES
                (:nome)");

        $sql->bindParam(':nome', $nome_nivel);

        $sql->execute();


    } catch (Exception $e) {
            $mysqli->rollback();

        exit("Erro no banco de dados: " . $e->getMessage());
    }
}
Insere_nivel( $_POST['nome_nivel']);


    //----------------------------------------------------------------------------------
//Realiza o INSERT DOS cursos
function Insere_curso($nome_curso, $nivel_ensino)
{
    try {
        $sql = $conex->prepare("INSERT INTO cursos (nome, nivel_ensino_idNivel_ensino) VALUES
                (:nome, :nivel)");

        $sql->bindParam(':nome', $nome_curso);
        $sql->bindParam(':nivel', $nivel_ensino);

        $sql->execute();


    } catch (Exception $e) {
            $mysqli->rollback();

        exit("Erro no banco de dados: " . $e->getMessage());
    }
}

Insere_curso( $_POST['nome_curso'], $_POST['nivel_ensino']);
    //----------------------------------------------------------------------------------
//Realiza o INSERT Das turmas
function Insere_turma($nome_turma, $idcurso)
{
    try {
        $sql = $conex->prepare("INSERT INTO turmas (nome, cursos_idcursos) VALUES
                (:nome, :nivel)");

        $sql->bindParam(':nome', $nome_turma);
        $sql->bindParam(':nivel', $idcurso);

        $sql->execute();


    } catch (Exception $e) {
            $mysqli->rollback();

        exit("Erro no banco de dados: " . $e->getMessage());
    }
}

Insere_turma($_POST['nome_turma'], $_POST['idcurso']);
    //----------------------------------------------------------------------------------
    */
//insere aluno
function Insere_aluno($nome_aluno, $data_nasc,  $foto, $idturma)
{
    try {
        require('pdo.inc.php');

        //Realiza o INSERT DOS JOGADORES
        $sql = $PDO->prepare("INSERT INTO alunos (nome_aluno, data_nasc, foto, turmas_idturmas) VALUES
                (:nome, :nasc, :foto,  :idturma)");

        $sql->bindParam(':nome', $nome_aluno);
        $sql->bindParam(':nasc', $data_nasc);
        $sql->bindParam(':foto', $foto);
        $sql->bindParam(':idturma', $idturma);
      

        $sql->execute();

        header('location:login.php');


    
    } catch (Exception $e) {
            
        exit("Erro no banco de dados: " . $e->getMessage());
    }
}

Insere_aluno( $_POST['nome'], $_POST['data_nasc'], $diretorio.$img['name'], $_POST['idturma']);
    // Redireciona para a página inicial
    header('Location: index.php');


    


/*

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

    header('location:login.php');*/