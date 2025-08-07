<?php

    $postData = $_POST;

    if (
        empty($postData['title'])
        || empty($postData['artist'])
        || empty($postData['image'])
        || empty($postData['description'])
        || trim($postData['title']) === ''
        || trim($postData['artist']) === ''
        || trim($postData['description']) === ''
        || !filter_var($postData['image'], FILTER_VALIDATE_URL)
        || strlen($postData['description']) < 3
    ) {
        header('Location: ajouter.php?error=true');
    } else {
        $title = strip_tags($postData['title']);
        $artist = strip_tags($postData['artist']);
        $image = strip_tags($postData['image']);
        $description = strip_tags($postData['description']);
    }

?>