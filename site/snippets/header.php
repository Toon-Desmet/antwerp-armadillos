<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page->Title()?></title>
</head>
<body>
    <header>
        <?php foreach ($site->children()->listed() as $links): ?>
            <a href="<?php echo $links->url()?>"><?php echo $links->title() ?></a>
        <?php endforeach?>
    </header>