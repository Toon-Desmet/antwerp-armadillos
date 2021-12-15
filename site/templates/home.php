<?php snippet('header') ?>

<main>
    <hero>
        <h1><?= $site->teamtitle() ?></h1>
        <h2><?= $page->subtitle() ?></h2>
        <button><a href="/contact">Inschrijven</a></button>
    </hero>

    <?php snippet('news-grid') ?>


    <article>
        <p><?= $page->lacrosse_text() ?></p>
        <button><a href="/wat">Wat is lacrosse?</a></button>
    </article>
</main>

<?php snippet('footer') ?>