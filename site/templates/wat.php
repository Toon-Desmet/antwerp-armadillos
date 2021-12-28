<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>


<main>

    <h1><?= $page->custom_title()->or($page->title()->html()) ?></h1>

    <accordion>
        <div class="hide">
            <?= $i = 0?>
        </div>
        <?php foreach ($page->tabs()->toStructure() as $tab) : $i++?>
        <div class="wat-is-lacrosse--article">
            <div class="article--title title<?= $i ?>">
                <h4 class="title"><?= $tab->title() ?></h4>
                <div class="arrows">
                    <img class="arrow arrow--down<?= $i ?>" src="./assets/images/arrow_down.png" alt="">
                    <img class="arrow arrow--up<?= $i ?>" src="./assets/images/arrow_up.png" alt="">
                </div>
            </div>
            <article class="article<?= $i ?>">
                <div class="article--text">
                    <p><?= $tab->text() ?></p>
                </div>
                <div class="article--images">
                    <?php if ($tab->image()) : ?>
                        <?php foreach ($tab->image()->toFiles() as $image) : ?>
                            <img src="<?= $image->url() ?>">
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </article>
        </div>
        <?php endforeach ?>
    </accordion>


    <info class="container--info">
        <h3>Geïnteresseerd?</h3>
        <p><?= $page->info_text() ?></p>
        <a class="button button--primary" href="<?= page('contact')->url() ?>">Schrijf je nu in!</a>
    </info>
</main>

<?php snippet('footer') ?>