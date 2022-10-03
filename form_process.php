<?php

    require_once("db.php");
    require_once("models/Comentarios.php");
    require_once("DAO/ComentariosDAO.php");

    header('Content-Type: application/json; charset=utf-8');

    $msg = new Comentarios();
    $comentariosDao = new ComentariosDAO($conn);

    $nome = filter_input(INPUT_POST, "nome");
    $comentario = filter_input(INPUT_POST, "comentario");

    $msg->set_nome($nome);
    $msg->set_texto($comentario);

    $comentariosDao->insert_comment($msg);

    

    echo json_encode(["sucesso"]);





