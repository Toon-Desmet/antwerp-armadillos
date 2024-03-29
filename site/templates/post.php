<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<main>
    <article class="artical--container">

        <h1><?= $page->title() ?></h1>
        <info>
            <?= $page->info() ?>
        </info>
        <?php if ($page->image()) : ?>
            <img src="<?= $page->image()->resize(1000)->url() ?>" alt="">
        <?php endif ?>
    </article>
</main>

<?php snippet('footer') ?>