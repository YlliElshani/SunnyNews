<?php
    include_once '../buisnessLogic/articleMapper.php';
    include_once '../buisnessLogic/articleLogic.php';

    $mapper=new ArticleMapper();
    $articles=$mapper->getAllArticles();

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $mapper=new ArticleMapper();
        $articles=$mapper->getArticleByID($id);
    }
?>


<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../CSSfiles/sidebar.css">
    <link rel="stylesheet" href="../CSSfiles/journalistPage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="../JSFiles/sidebar.js"></script>
        <title>
            News Editor
        </title>
    </head>
    <body>
    <?php
        include('../Re-Usable/adminNav.php');
      ?>
        <div class="formBox">
                <h3>
                    Add news Article
                </h3>
                <form action="../buisnessLogic/articleLogic.php" method="post">

                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        Headline *
                    </label>
                    <input type="text" placeholder="Headline" name="headline">
                    <label>
                        Content *
                    </label>
                    <textarea required  name="content"></textarea>
                    <label>
                       Journalist name(s)
                    </label>
                    <input type="text" placeholder="Journalist(s)" name="journalists">
                    <button name="submitBtn" id="submitBtn">
                        Submit
                    </button>
                    <br/>
                </form>
            </div>


            <div class="formBox">
                <h3>
                    Edit Article by Id
                </h3>
            <?php
                $article=$mapper->getArticleByID('5');
                foreach($article as $articles){
                ?>
                <form action="../buisnessLogic/editArticle.php" method="post">
                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        ID *
                    </label>
                    <input type="text" placeholder="Headline" name="id" value=<?php echo $articles['id'];?>>
                    <label>
                        Headline *
                    </label>
                    <input type="text" placeholder="Headline" name="headline" value=<?php echo $articles['headline'];?>>
                    <label>
                        Content *
                    </label>
                    <input type="text" required  name="content" value=<?php echo $articles['content'];?>></input>
                    <label>
                       Journalist name(s)
                    </label>
                    <input type="text" placeholder="Journalist(s)" name="journalists" value=<?php echo $articles['journalists'];?>>
                    <button name="submitBtn" id="submitBtn">
                        Submit
                    </button>
                    <br/>
                </form>
                <?php
                    }
                ?>
            </div>

        <div class="newsDiv">
                <h3>
                    Active articles:
                </h3>
            <div>
                <?php
                    $article = $mapper->getArticleByID('5');
                    foreach($article as $articles){
                ?>
                  <b>
                  <?php echo $articles['headline'];?><br>
                  </b> 
                  <p>
                    <?php echo $articles['content'];?><br>
                  </p>
                  <p>
                    <?php echo $articles['journalists'];?><br>
                  </p> 
                    <a href=<?php echo "../buisnessLogic/deleteArticle.php?id=".$articles['id'];
                    ?>>Delete</a>
                <?php 
                    }
                ?>
            </div>

            <div>
                <?php
                    $article = $mapper->getArticleByID('6');
                    foreach($article as $articles){
                ?>
                  <b>
                  <?php echo $articles['headline'];?><br>
                  </b> 
                  <p>
                    <?php echo $articles['content'];?><br>
                  </p>
                  <p>
                    <?php echo $articles['journalists'];?><br>
                  </p> 
                    <a href=<?php echo "../buisnessLogic/deleteArticle.php?id=".$articles['id'];
                    ?>>Delete</a>
                <?php 
                    }
                ?>
            </div>
        </div>
    </body>
</html>