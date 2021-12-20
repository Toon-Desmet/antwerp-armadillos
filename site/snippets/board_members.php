<grid>
    <?php
    foreach ($team_members as $member) : ?>
        <figure>
            <?php if ($member->image()) : ?>
                <img src="<?= $member->image()->crop(400)->url() ?> ">
            <?php else : ?>
                <img src="<?= asset('assets/images/Armadillos_logo_500x500')->crop(400)->url() ?>" alt="">
            <?php endif ?>
            <h3> <?= $member->fname() . " " . $member->lname() ?></h3>
            <figcaption><?= $member->board_function() ?></figcaption>
        </figure>
    <?php endforeach ?>
</grid>