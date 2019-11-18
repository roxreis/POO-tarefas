<?php

    include_once "Conexao.php";
    class Post extends Conexao{

        public function criarPost($imagem, $descricao){
            $db = parent::criarConexao();

            $quary = $db->prepare("INSERT INTO * Post (imagem, descricao) values(?,?)");
            return $query->execute([$imagem, $descricao]);

        }

        public function listarPost(){
            $db = parent::criarConexao();
            $query = $db->query('SELECT * FROM posts ORDER BY id DESC');
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            return $resultado;

        }

         




    }


