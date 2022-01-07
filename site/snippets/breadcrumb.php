<breadcrumb>
    <?php
    $backUrl;
    if ($page->parent()) {
        $backUrl = $page->parent()->url();
    } else {
        $backUrl = $site->url();
    }
    ?>
    <a class="breadcrumbs--back-arrow" href="<?= $backUrl ?>">
        <img src="<?= asset("assets/images/back_arrow.svg")->url() ?>" alt="back arrow">
    </a>

    <?php foreach ($site->breadcrumb() as $key => $crumb) :
        if ($crumb->title() != "Home") {
            echo "<h4>/</h4>";
        }
    ?>
        <a href="<?= $crumb->url() ?>"><?= $crumb->title()->lower() ?></a>
    <?php endforeach; ?>
</breadcrumb>