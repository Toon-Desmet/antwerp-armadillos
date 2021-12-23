<breadcrumb>
    <!-- //TODO implement the last breadcrumb as the redirect -->
    <button><a href="/home">&#8249;</a></button>
    <?php foreach ($site->breadcrumb() as $key => $crumb) :
        //TODO  Fixen naar de eerste key in plaats van home
        if ($crumb->title() != "Home") {
            echo "/";
        }
    ?>
        <a href="<?= $crumb->url() ?>"><?= $crumb->title()->lower() ?></a>
    <?php endforeach; ?>
</breadcrumb>