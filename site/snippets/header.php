<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page->Title()?></title>
    <?= css('assets/css/index.css')?>
</head>
<body>
    <header>
        <a href="<?php echo $site->url()?>"><h1><?php echo $site->title()?><h1></a>

        <div class="nav--links">
            <?php foreach ($site->children()->listed() as $links): ?>
                <a class="nav--links-link" href=<?php echo $links->url()?>><?php echo $links->title() ?></a>
            <?php endforeach?>
        </div>
    </header>