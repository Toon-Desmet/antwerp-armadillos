<breadcrumb>
    <!-- //TODO implement the last breadcrumb as the redirect -->
    <!-- //TODO changing text button to arrow button -->
    <button><a href="/home">back</a></button>
    <?php foreach ($site->breadcrumb() as $key => $crumb) :
        //TODO  Fixen naar de eerste key in plaats van home
        if ($crumb->title() != "Home") {
            echo "/";
        }
    ?>
        <a href="<?= $crumb->url() ?>"><?= $crumb->title()->lower() ?></a>
    <?php endforeach; ?>
</breadcrumb>