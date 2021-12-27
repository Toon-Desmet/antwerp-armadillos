<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<!-- //TODO update controller -->
<main>
    <h1><?= $page->custom_title()->or($page->title()->html()) ?></h1>

    <form action="<?= $page->url() ?>">

        <field>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" placeholder="Naam" required>
        </field>

        <field>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email" required>
        </field>

        <field>
            <label for="text">Opmerking</label>
            <textarea type="textarea" id="text" name="text" placeholder="Vraag of opmerking" required></textarea>
        </field>

        <input class="button button--primary" type="submit" name="submit" value="Submit">
    </form>

    <info>
        <?= $page->lacrosse_info() ?><a href="<?= page('wat')->url() ?>"> klik hier</a>
    </info>
    <info>
        <?= $page->training_info() ?><a href="<?= page('training')->url() ?>"> klik hier</a>
    </info>
</main>

<?php snippet('footer') ?>