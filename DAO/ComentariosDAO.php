<?php

    require_once("models/Comentarios.php");

    class ComentariosDAO implements ComentariosDAOInterface{

        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        //Insere comentarios no bd
        public function insert_comment(Comentarios $cmt){

            $nome = $cmt->get_nome();
            $texto = $cmt->get_texto();

            $stmt = $this->conn->prepare("INSERT INTO comentarios (nome, texto) VALUES (:nome, :texto)");

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam("texto", $texto);

            $stmt->execute();

        }

        //Resgata todos os comentários postados na base de dados

        public function show_comments(){

            $all_comments = [];

            $stmt = $this->conn->query("SELECT * FROM comentarios");

            $stmt->execute();

            if($stmt->rowCount() > 0){

                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($data as $row){
                    array_push($all_comments, $row);
                }
            }

            return $all_comments;

        }
    }