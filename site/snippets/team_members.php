<grid>
    <?php
    $info;
    foreach ($team_members as $member) : ?>
        <figure>
            <?php if ($member->image()) : ?>
                <img src="<?= $member->image()->crop(400)->url() ?> ">
            <?php else : ?>
                <?php if (svg($site->image())) {
                    echo svg($site->image());
                } else {
                    echo $site->title();
                } ?>
            <?php endif ?>
            <h3> <?= $member->fname() . " " . $member->lname() ?></h3>
            <figcaption><?= $member->{$info}() ?></figcaption>
        </figure>
    <?php endforeach ?>
</grid>