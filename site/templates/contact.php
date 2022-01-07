<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main>
    <div class="container--contact-form">
        <h3><?= $page->custom_title()->or($page->title()->html()) ?></h3>

        <?php if ($success) : ?>
            <div class="alert success">
                <p><?= $success ?></p>
            </div>
        <?php else : ?>
            <?php if (isset($alert['error'])) : ?>

                <div><?= $alert['error'] ?></div>

            <?php endif ?>

            <form class="form--contact" method="post" action="<?= $page->url() ?>">
                <style>
                    .honeypot {
                        position: absolute;
                        left: -9999px;
                    }

                    .button:hover {
                        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
                        cursor: pointer;
                    }
                </style>
                <div class="honeypot">
                    <label for="website">Website <abbr title="required">*</abbr></label>
                    <input type="url" id="website" name="website" tabindex="-1">
                </div>

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
        <?php endif ?>
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