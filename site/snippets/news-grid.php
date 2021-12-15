<grid>
    <?php foreach (page('news')->children()->listed() as $post) : ?>
        <a href="<?= $post->url() ?>">
            <figure>
                <img src="<?= $post->image()->crop(400)->url() ?> ">
                <figcaption> <?= $post->title() ?></figcaption>
                <a href="<?= $post->url() ?>">Lees meer</a>
            </figure>
        </a>
    <?php endforeach ?>
</grid>