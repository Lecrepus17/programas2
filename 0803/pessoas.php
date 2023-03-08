<?php
    $mysqli = new mysqli("localhost", "root", "", "teste");
    $mysqli->set_charset("utf8");
try {

    $mysqli->begin_transaction();
    $mysqli->query("INSERT INTO `pessoas` (id, nome) values (3,'Bruno')");
    $mysqli->query("INSERT INTO `pessoas` (id, nome) values (4,'Gustavo')");

   
    $mysqli->query("INSERT INTO `pessoas` (id, nome) values (10,'lucas')");


    throw new Exception('Erro 1');
    $mysqli->commit();       


} catch (Exception $e) {
    $mysqli->rollback();
    die($e->getMessage());
};