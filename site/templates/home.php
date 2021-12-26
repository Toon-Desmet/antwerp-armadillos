<?php snippet('header') ?>

<main>
    <div class="hero">
        <!-- //TODO add hero image and make editable in panel -->
        <div class="hero--text">
            <h1><?= $site->team_title() ?></h1>
            <h3><?= $page->subtitle() ?></h3>
        </div>
        <div class="hero--button">
            <a class="button button--primary" href="<?= page('contact')->url() ?>">Inschrijven</a>
        </div>
    </div>

    <?php snippet('news-grid', [
        'posts' => collection('posts')
            ->limit(6)
    ]) ?>
    <div class="post--button">
        <a class="button button--primary" href="#">Alle artikelen lezen</a>
    </div>

    <div class="banner--container">
        <div class="banner">
            <p><?= $page->lacrosse_text() ?></p>
            <a class="button button--primary" href="<?= page('wat')->url() ?>">Wat is lacrosse?</a>
        </div>
    </div>
</main>

<?php snippet('footer') ?>