<?php
    include_once '../buisnessLogic/articleMapper.php';
    include_once '../buisnessLogic/articleLogic.php';

    $mapper=new ArticleMapper();
    $articles=$mapper->getAllArticles();
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

        <div class='parentNav'>
            <div>
                <h3>
                    Article to be posted:
                </h3>
                <p>
                <?php
                    $mapper=new ArticleMapper();
                    $mapper->getArticleByID('id');
                ?>
                </p>
            </div>
        </div>
        <div class='parentNav'>
            <div>
                <h3>
                   Number of active articles:
                </h3>
            </div>
        </div>

        <div class="parentNav">
                <?php
                    $article = $mapper->getArticleByID('2');
                    foreach($article as $articles){
                ?>
                <ul class="list">
                    <li><?php echo $articles['headline'];?></li><br>
                    <li><?php echo $articles['content'];?></li><br>
                </ul>
                <?php 
                    }
                ?>
            </div>
    </body>
</html>