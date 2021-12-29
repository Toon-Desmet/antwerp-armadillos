<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<main>
    <article class="artical--container">

        <h1><?= $page->title() ?></h1>
        <info>
            <?= $page->info() ?>
        </info>
        <img src="<?= $page->image()->resize(1000)->url() ?>" alt="">
    </article>
</main>

<?php snippet('footer') ?>