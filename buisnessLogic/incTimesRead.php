<?php

include_once 'Mapper/articleMapper.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new ArticleMapper();
    $mapper->incrementByOne($id);

    sleep(1);

    header('Location:../HTMLfiles/newsEditor.php');
}