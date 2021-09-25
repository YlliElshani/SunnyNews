<?php

    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\SuperClass\articleClass.php';
    include_once 'C:\xampp\htdocs\WebPracticeProject\buisnessLogic\Mapper\articleMapper.php';

        session_start();

        if (isset($_POST['submitBtn'])) {
            $article=new ArticleLogic($_POST);
            $article->insertData();
        }

        class ArticleLogic{
            private $headline;
            private $content;
            private $journalists;

                function __construct($formData)
                {   
                    $this->headline=$formData['headline'];
                    $this->content=$formData['content'];
                    $this->journalists=$formData['journalists'];
                }

                public function insertData(){
                    $article=new Article($this->headline,$this->content,$this->journalists);
                    $mapper=new ArticleMapper();
                    $mapper->insertArticle($article);

                    sleep(3);

                    header('Location:../../HTMLfiles/newsEditor.php?success=articlePosted');
                }
        }