<?php snippet('header') ?>

<main>
    <hero>
        <h1><?= $site->teamtitle() ?></h1>
        <h2><?= $page->subtitle() ?></h2>
        <button><a href="<?= page('contact')->url() ?>">Inschrijven</a></button>
    </hero>

    <?php snippet('news-grid') ?>


    <article>
        <p><?= $page->lacrosse_text() ?></p>
        <button><a href="<?= page('wat')->url() ?>">Wat is lacrosse?</a></button>
    </article>
</main>

<?php snippet('footer') ?>