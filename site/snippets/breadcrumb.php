<breadcrumb>
    <!-- //TODO implement the last breadcrumb as the redirect -->
    <!-- //TODO changing text button to arrow button -->
    <a class="breadcrumbs--back-arrow" href="<?php echo $site->url() ?>"><img src="./assets/images/back_arrow.svg" alt=""></a>
    <?php foreach ($site->breadcrumb() as $key => $crumb) :
        //TODO  Fixen naar de eerste key in plaats van home
        if ($crumb->title() != "Home") {
            echo "<h4>/</h4>";
        }
    ?>
        <a href="<?= $crumb->url() ?>"><?= $crumb->title()->lower() ?></a>
    <?php endforeach; ?>
</breadcrumb>