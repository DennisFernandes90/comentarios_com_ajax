<?php

    class Comentarios{

        private $id;
        private $nome;
        private $texto;
        private $data;

        //Getters e setters

        public function set_id($id){
            $this->id = $id;
        }

        public function get_id(){
            return $this->id;
        }

        public function set_nome($nome){
            $this->nome = $nome;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function set_texto($texto){
            $this->texto = $texto;
        }

        public function get_texto(){
            return $this->texto;
        }

        public function set_data($data){
            $this->data = $data;
        }

        public function get_data(){
            return $this->data;
        }
    }

    interface ComentariosDAOInterface{
        public function insert_comment(Comentarios $cmt);
        public function show_comments();
    }