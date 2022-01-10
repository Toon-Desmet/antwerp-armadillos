<?php snippet('header') ?>

<main>
    <div class="hero">

        <?php if ($page->image()->url()) : ?>
            <div class="hero--image">
                <img class="image--hero" src="<?= $page->image()->url() ?>" alt="<?= $page->image()->alt() ?>">
            </div>
        <?php endif ?>
        <div class="hero--text">
            <h1><?= $site->team_title() ?></h1>
            <h3><?= $page->subtitle() ?></h3>
        </div>
        <div class="hero--button">
            <a class="button button--primary" href="<?= page('contact')->url() ?>">Inschrijven</a>
        </div>
    </div>

    <?php
    $limit = 6;
    snippet('news-grid', [
        'posts' => collection('posts')
            ->limit($limit)
    ]); ?>

    <?php if (collection('posts')->count() >= $limit) : ?>
        <div class="post--button">
            <a class="button button--primary" href="<?= page('news')->url() ?>">Alle artikelen lezen</a>
        </div>
    <?php endif ?>
    <div class="banner--container">
        <div class="banner">
            <p><?= $page->lacrosse_text() ?></p>
            <a class="button button--primary" href="<?= page('wat')->url() ?>">Wat is lacrosse?</a>
        </div>
    </div>
</main>

<?php snippet('footer') ?>