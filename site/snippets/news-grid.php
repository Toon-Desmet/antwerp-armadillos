<grid>
    <?php foreach ($posts as $post) : ?>
        <a href="<?= $post->url() ?>">
            <figure>
                <?php if ($post->image()) : ?>
                    <img src="<?= $post->image()->crop(400)->url() ?> ">
                <?php endif ?>
                <figcaption> <?= $post->title() ?></figcaption>
                <a href="<?= $post->url() ?>">Lees meer</a>
            </figure>
        </a>
    <?php endforeach ?>
</grid>