<?php

    require_once(__DIR__ . '/bdd.php');
    require_once(__DIR__ . '/header.php');

    $artworksStatement = $mysqlClient->prepare('SELECT * FROM artworks');
    $artworksStatement->execute();
    $artworks = $artworksStatement->fetchAll();

?>
    <div id="liste-oeuvres">
        <?php foreach($artworks as $artwork): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?= $artwork['artwork_id'] ?>">
                    <img src="<?= $artwork['image'] ?>" alt="<?= $artwork['title'] ?>">
                    <h2><?= $artwork['title'] ?></h2>
                    <p class="description"><?= $artwork['artist'] ?></p>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
<?php require_once(__DIR__ . '/footer.php'); ?>