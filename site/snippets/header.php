<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="/assets/images/Armadillos_logo_500x500.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php if ($page->isHomePage()) : ?>
        <title><?= $site->Title() ?></title>
    <?php else : ?>
        <title><?= $page->Title() ?> | <?= $site->Title() ?></title>
    <?php endif ?>
    <?= css('assets/css/index.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c2920d7ddb.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <a class="logo" href="<?php echo $site->url() ?>">
            <?php if (svg($site->image())) {
                echo svg($site->image());
            } else {
                echo $site->title();
            }
            ?>
        </a>


        <nav class="nav--popout">
            <img class="nav--hamburger toggle" src="./assets/images/hamburger.svg" alt="">
            <img class="nav--cross toggle" src="./assets/images/cross.svg" alt="">
            <div class="nav--popout-links">
                <?php foreach ($site->children()->listed() as $links) : ?>
                    <a class="nav--popout-links-link" href=<?php echo $links->url() ?>><?php echo $links->title() ?></a>
                <?php endforeach ?>
            </div>
        </nav>
        <nav class="nav--links">
            <div class="hide">
                <?= $i = 0 ?>
            </div>
            <?php foreach ($site->children()->listed() as $links) : $i++ ?>
                <a class="nav--links-link link<?= $i ?>" href=<?php echo $links->url() ?>><?php echo $links->title() ?></a>
            <?php endforeach ?>
        </nav>
    </header>