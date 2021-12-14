<?php snippet('header') ?>

<main>
    <hero>
        <h1><?= $page->teamtitle() ?></h1>
        <h2><?= $page->subtitle() ?></h2>
        <button><a href="/contact">Inschrijven</a></button>
    </hero>

    <grid>
        <?php foreach (page('news')->children()->listed() as $post) : ?>
            <a href="<?= $post->url() ?>">
                <figure>
                    <img src="<?= $post->image()->crop(400)->url() ?> ">
                    <figcaption> <?= $post->title() ?></figcaption>
                    <a href="<?= $post->url() ?>">Lees meer</a>
                </figure>
            </a>
        <?php endforeach ?>
    </grid>

    <article>
        <p><?= $page->lacrosse_text() ?></p>
        <button><a href="/wat">Wat is lacrosse?</a></button>
    </article>
</main>

<?php snippet('footer') ?>