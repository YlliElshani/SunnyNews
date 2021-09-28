<?php

include_once '../Mapper/articleMapper.php';
include_once '../SuperClass/articleClass.php';

    if (isset($_POST['submitBtn'])) {
        $article=new EditArticle($_POST);
        $article->editData();
    }

    class EditArticle{
        private $id;
        private $headline;
        private $content;
        private $journalists;
        private $dateAdded;
        private $timesRead;

            function __construct($formData)
            {   
                $this->id=$formData['id'];
                $this->headline=$formData['headline'];
                $this->content=$formData['content'];
                $this->journalists=$formData['journalists'];
                $this->dateAdded=$formData['dateAdded'];
                $this->timesRead=$formData['timesRead'];
            }

            public function editData(){
                $article=new Article($this->id,$this->headline,$this->content,$this->journalists,$this->dateAdded,$this->timesRead);
                $mapper=new ArticleMapper();
                $mapper->editArticle($article,$this->id);

                sleep(1);

                header('Location:../../HTMLfiles/newsEditor.php?success=articleEdited');
            }
    }