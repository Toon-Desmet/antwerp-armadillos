<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<!-- //TODO update controller -->
<main>
    
    <div class="container--contact-form">
        <h3><?= $page->custom_title()->or($page->title()->html()) ?></h3>
        <form class="form--contact" action="<?= $page->url() ?>">

            <field>
                <input type="text" id="name" name="name" placeholder="Naam" required>
            </field>

            <field>
                <input type="text" id="email" name="email" placeholder="Email" required>
            </field>

            <field>
                <textarea type="textarea" id="text" name="text" placeholder="Vraag of opmerking" required></textarea>
            </field>

            <input class="button button--primary" type="submit" name="submit" value="Submit">
        </form>
    </div>

    <div class="container--contact-info">
        <info>
            <?= $page->lacrosse_info() ?><a href="<?= page('wat')->url() ?>"> klik hier</a>
        </info>
        <info>
            <?= $page->training_info() ?><a href="<?= page('training')->url() ?>"> klik hier</a>
        </info>
    </div>
</main>

<?php snippet('footer') ?>