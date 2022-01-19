<grid>
    <?php
    $info;
    foreach ($team_members as $member) : ?>
        <figure>
            <?php if ($member->image()) : ?>
                <img src="<?= $member->image()->crop(400)->url() ?> ">
            <?php else : ?>
                <?= svg("assets/images/AntwerpArmadillos_logo.svg") ?>
            <?php endif ?>
            <h3> <?= $member->fname() . " " . $member->lname() ?></h3>
            <figcaption><?= $member->{$info}() ?></figcaption>
        </figure>
    <?php endforeach ?>
</grid>