<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main>
    <training>
        <h2>Onze trainingen gaan door op:</h2>

        <?php if ($page->jeugd()->isNotEmpty()) : ?>
            <h3>Voor de jeugd:</h3>
            <p><?= $page->jeugd() ?></p>
        <?php endif ?>
        <?php if ($page->mannen()->isNotEmpty()) : ?>
            <h3>Voor de mannen:</h3>
            <p><?= $page->mannen() ?></p>
        <?php endif ?>
        <?php if ($page->vrouwen()->isNotEmpty()) : ?>
            <h3>Voor de vrouwen:</h3>
            <p><?= $page->vrouwen() ?></p>
        <?php endif ?>
    </training>

    <interesse>
        <h2>Geinteresseerd?</h2>
        <?php if ($page->interesse()->isNotEmpty()) : ?>
            <p><?= $page->interesse() ?></p>
        <?php endif ?>

        <button><a href="/contact">Inschrijven</a></button>
    </interesse>

    <location>
        <h2>Locatie</h2>
        <?php if ($page->googlemap()->isNotEmpty()) : ?>
            <?= $page->googlemap() ?>
        <?php else : ?>
            <?= $page->locatie() ?>
        <?php endif ?>
    </location>
</main>
<?php snippet('footer') ?>