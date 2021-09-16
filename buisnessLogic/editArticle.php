<?php

include_once 'articleMapper.php';
include_once 'articleClass.php';

    // if (isset($_GET['id']) && isset($_GET['headline'])) {
    //     $headline=$_GET['headline'];
    //     $content=$_GET['content'];
    //     $journalists=$_GET['journalists'];

    //     $article=new Article($headline,$content,$journalists);
    //     $mapper=new ArticleMapper();
    //     $mapper->editArticle($article,$id);
        
    //     sleep(1);

    //     header('Location:../HTMLfiles/newsEditor.php');
    // }

    if (isset($_POST['submitBtn'])) {
        $article=new EditArticle($_POST);
        $article->editData();
    }

    class EditArticle{
        private $id;
        private $headline;
        private $content;
        private $journalists;

            function __construct($formData)
            {   
                $this->id=$formData['id'];
                $this->headline=$formData['headline'];
                $this->content=$formData['content'];
                $this->journalists=$formData['journalists'];
            }

            public function editData(){
                $article=new Article($this->id.$this->headline,$this->content,$this->journalists);
                $mapper=new ArticleMapper();
                $mapper->editArticle($article,$this->id);

                sleep(1);

                header('Location:../HTMLfiles/newsEditor.php?success=articleEdited');
            }
    }