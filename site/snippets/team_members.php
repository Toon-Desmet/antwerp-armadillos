<grid>
    <?php
    $info;
    foreach ($team_members as $member) : ?>
        <figure>
            <?php if ($member->image()) : ?>
                <img src="<?= $member->image()->crop(400)->url() ?> ">
            <?php else : ?>
                <img src="http://via.placeholder.com/175x250" alt="">
            <?php endif ?>
            <h3> <?= $member->fname() . " " . $member->lname() ?></h3>
            <figcaption><?= $member->{$info}() ?></figcaption>
        </figure>
    <?php endforeach ?>
</grid>