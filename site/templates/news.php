<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>

<main>
    <?php snippet('news-grid', [
        'posts' => collection('posts')
    ]) ?>
</main>
<?php snippet('footer') ?>