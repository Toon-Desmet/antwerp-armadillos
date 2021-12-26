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


    <article>
        <p><?= $page->lacrosse_text() ?></p>
        <a class="button button--primary" href="<?= page('wat')->url() ?>">Wat is lacrosse?</a>
    </article>
</main>

<?php snippet('footer') ?>