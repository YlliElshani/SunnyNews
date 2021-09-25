<?php

require_once 'dbh.class.php';

    class ArticleMapper extends Dbh{

        private $conn;
        private $query;

            public function __construct()
            {
                $this->conn=$this->getConnection();
            }

            public function getArticleByHeadline($headline){
                $this->query = "select * from articles where headline=:headline";
                $statement = $this->conn->prepare($this->query);
                $statement->bindParam(":headline", $headline);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            public function getArticleByID($id){
                $this->query = "select * from articles where id=:id";
                $statement = $this->conn->prepare($this->query);
                $statement->bindParam(":id", $id);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            
            public function getAllArticles(){
                $this->query = "select * from articles";
                $statement = $this->conn->prepare($this->query);
                $statement->execute();
                return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            }

            
            public function deleteArticle($id){
                $this->query = "delete from articles where id=:id";
                $statement = $this->conn->prepare($this->query);
                $statement->bindParam(":id", $id);
                $statement->execute();
            }

            
            public function insertArticle(\Article $article){
                $query="INSERT INTO articles (headline,content,journalists) VALUES(:headline,:content,:journalists)";
                $statement = $this->conn->prepare($query);

                $headline=$article->getHeadline();
                $content=$article->getContent();
                $journalists=$article->getJournalist();

                $statement->bindParam(":headline",$headline);
                $statement->bindParam(":content",$content);
                $statement->bindParam(":journalists",$journalists);
                $statement->execute();
            }

            /*
                Due to time restrictions, news articles will be limited to a set ammount of Id's(18 in total) which
                then will be manually called into their appropriate spaces. The crud functionality
                will enable "posting" new articles by editing the ones already in place.

                Articles will be different because each hyperlink will have the re-usable code
                from the NewsDetail.html file, with different article Id's.
            */
            
            public function editArticle(\Article $article,$id){
                    $query="UPDATE articles SET headline=:headline,content=:content,journalists=:journalists WHERE id=:id";
                    var_dump($article);
                    $statement=$this->conn->prepare($query);
                    $headline=$article->getHeadline();
                    $content=$article->getContent();
                    $journalists=$article->getJournalist();

                    $statement->bindParam(":headline",$headline);
                    $statement->bindParam(":content",$content);
                    $statement->bindParam(":journalists",$journalists);
                    $statement->bindParam(":id",$id);
                    $statement->execute();
            }

    }