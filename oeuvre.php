<?php

    require_once(__DIR__ . '/bdd.php');
    require_once(__DIR__ . '/header.php');

    $getId = $_GET['id'];

    if(empty($getId)) {
        header('Location: index.php');
    }

    $artworkStatement = $mysqlClient->prepare('SELECT * FROM artworks WHERE artwork_id = ?');
    $artworkStatement->execute([intval($getId)]);
    $artwork = $artworkStatement->fetch();

    if(!$artwork) {
        header('Location: index.php');
    }

?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $artwork['title'] ?></h1>
            <p class="description"><?= $artwork['artist'] ?></p>
            <p class="description-complete"><?= $artwork['description'] ?></p>
        </div>
    </article>
<?php require_once(__DIR__ . '/footer.php'); ?>