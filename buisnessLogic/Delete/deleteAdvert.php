<?php

include_once '../Mapper/advertMapper.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mapper = new AdvertMapper();
    $mapper->deleteAdvert($id);

    sleep(1);

    header('Location:../../HTMLfiles/newsEditor.php');
}