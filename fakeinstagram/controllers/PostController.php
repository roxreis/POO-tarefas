<?php 

include"models/Post.php";

class PostController{

    public function acao($rotas){
        switch ($rotas) {
            case 'posts':
                    $this->listarPosts();
                break;
            
            case 'formulario-post':
                    $this->viewFormularioPost(); 
                break;
            case "cadastrar-post":
                    $this->cadastroPost();
                break;
        }
    }

    private function viewFormularioPost(){
        include_once "views/newPost.php";
    }

    private function viewPosts(){
        include_once "views/posts.php";
    }

    private function cadastroPost(){
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['img']['name'];
        $linkTemp = $_FILES['img']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";

        move_uploaded_file($linkTemp, $caminhoSalvar);

        $post = new Post();
        $resultado = $post->criasPost($caminhoSalvar, $descricao);

        if($resultado){
            header('Location:/fakeinstagram/posts');
        }else{
            echo "Post  incorreto";
        }


    }    

    private function listarPosts(){
        $post = new Post();
        $listaPosts = $post->listarPosts();
        $_REQUEST['posts'] = $listaPosts;
        $this->viewPosts();
    }



}