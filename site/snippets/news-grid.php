<grid>
    <?php foreach ($posts as $post) : ?>
        <div class="post--container">
            <a href="<?= $post->url() ?>">
                <figure>
                    <?php if ($post->image()) :               ?>
                        <img class="image--post" src="<?= $post->image()->crop(400)->url() ?> ">
                    <?php endif ?>
                    <figcaption> <?= $post->title() ?></figcaption>
                    <a href="<?= $post->url() ?>">Lees meer</a>
                </figure>
            </a>
        </div>
    <?php endforeach ?>
</grid>