<div class="container">
    <div class="posts--container">
        <?php foreach ($posts as $post) : ?>
            <div class="post--container">
                <a href="<?= $post->url() ?>">
                    <figure>
                        <?php if ($post->image()) :               ?>
                            <img class="image--post" src="<?= $post->image()->crop(400)->url() ?> ">
                        <?php endif ?>
                        <p class="text--big text--white"> <?= $post->title() ?></p>
                        <a class="text text--white text--link" href="<?= $post->url() ?>">Lees meer</a>
                    </figure>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>