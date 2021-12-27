<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="/assets/images/Armadillos_logo_500x500.jpg" />
    <?php if ($page->isHomePage()) : ?>
        <title><?= $site->Title() ?></title>
    <?php else : ?>
        <title><?= $page->Title() ?> | <?= $site->Title() ?></title>
    <?php endif ?>
    <?= css('assets/css/index.css') ?>
</head>

<body>
    <header>
        <a class="logo" href="<?php echo $site->url() ?>">
            <!-- //TODO change title to armadillos logo-->
            <img src="./assets/images/Armadillos_logo_500x500.jpg" alt="">
        </a>

        <nav class="nav--links">
            <?php foreach ($site->children()->listed() as $links) : ?>
                <a class="nav--links-link" href=<?php echo $links->url() ?>><?php echo $links->title() ?></a>
            <?php endforeach ?>
        </nav>
    </header>