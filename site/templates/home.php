<?php snippet('header') ?>

<main>
    <hero>
        <!-- //TODO add hero image and make editable in panel -->
        <h1><?= $site->teamtitle() ?></h1>
        <h2><?= $page->subtitle() ?></h2>
        <button><a href="<?= page('contact')->url() ?>">Inschrijven</a></button>
    </hero>

    <?php snippet('news-grid', [
        'posts' => collection('posts')
            ->limit(6)
    ]) ?>


    <article>
        <p><?= $page->lacrosse_text() ?></p>
        <button><a href="<?= page('wat')->url() ?>">Wat is lacrosse?</a></button>
    </article>
</main>

<?php snippet('footer') ?>