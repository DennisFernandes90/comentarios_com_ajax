<?php

    require_once("db.php");
    require_once("models/Comentarios.php");
    require_once("DAO/ComentariosDAO.php");

    header('Content-Type: application/json; charset=utf-8');

    $msg = new Comentarios();
    $comentariosDao = new ComentariosDAO($conn);

    $allComments = $comentariosDao->show_comments();

    echo json_encode($allComments);