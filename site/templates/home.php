<?php snippet('header') ?>

<main>
    <hero>
        <img src="<?= $page->image()->crop(400)->url() ?>" alt="<?= $page->image()->alt() ?>">
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