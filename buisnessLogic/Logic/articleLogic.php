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
            private $dateAdded;
            private $timesRead;


                function __construct($formData)
                {   
                    $this->headline=$formData['headline'];
                    $this->content=$formData['content'];
                    $this->journalists=$formData['journalists'];
                    $this->dateAdded=$formData['dateAdded'];
                    $this->timesRead=$formData['timesRead'];

                }

                public function insertData(){
                    $article=new Article($this->headline,$this->content,$this->journalists,$this->dateAdded,$this->timesRead);
                    $mapper=new ArticleMapper();
                    $mapper->insertArticle($article);

                    sleep(3);

                    header('Location:../../HTMLfiles/newsEditor.php?success=articlePosted');
                }
        }