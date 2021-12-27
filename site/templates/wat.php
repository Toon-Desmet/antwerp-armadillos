<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>


<main>

    <h1><?= $page->custom_title()->or($page->title()->html()) ?></h1>

    <accordion>

        <?php foreach ($page->tabs()->toStructure() as $tab) : ?>
            <article>
                <h2><?= $tab->title() ?></h2>
                <p><?= $tab->text() ?></p>
                <?php if ($tab->image()) : ?>
                    <?php foreach ($tab->image()->toFiles() as $image) : ?>
                        <img src="<?= $image->url() ?>">
                    <?php endforeach ?>
                <?php endif ?>
            </article>
        <?php endforeach ?>
    </accordion>


    <info>
        <h3>Geïnteresseerd?</h3>
        <p><?= $page->info_text() ?></p>
        <a class="button button--primary" href="<?= page('contact')->url() ?>">Schrijf je nu in!</a>
    </info>
</main>

<?php snippet('footer') ?>