<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<?php
$board = "board";
$men = "men";
$women = "women";

$group = isset($_GET['group']) ? $_GET['group'] : null;
if (!$group) {
    header('Location: ' . $page->url() . "?group=" . $board);
    exit();
} elseif ($group != $board && $group != $men && $group != $women) {
    $group = $board;
}

$positions = array(
    'attack' => [
        'title' => 'Attack',
        'info' => 'Attack'
    ],
    'midfield' => [
        'title' => 'Midfield',
        'info' => 'Midfield'
    ],
    'defence' => [
        'title' => 'Defence',
        'info' => 'Defence'
    ],
    'goalie' => [
        'title' => 'Goalie',
        'info' => 'Goalie'
    ]
);

function team($positions, string $gender)
{
    foreach ($positions as $position) {
        $collection = collection('team_members')
            ->filterBy('gender', $gender)
            ->filterBy('position', $position['info']);

        if ($collection->count() != 0) {
            echo '<div class="teams--container">';
            echo "<h2>" . $position['title'] . "</h2>";
            echo '<div class="teams--members">';
            snippet('team_members', [
                'team_members' => $collection,
                'info' => 'position'
            ]);
            echo "</div>";
            echo "</div>";
        }
    }
}
?>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


<main>
    <nav class="nav--teams">
        <ul class="nav--teams-list">
            <li><a href="<?= $page->url() . "?group=" . $board ?>">
                    <h2>Bestuur</h2>
                </a></li>
            <li><a href="<?= $page->url() . "?group=" . $men ?>">
                    <h2>Heren</h2>
                </a></li>
            <li><a href="<?= $page->url() . "?group=" . $women ?>">
                    <h2>Dames</h2>
                </a></li>
        </ul>
    </nav>

    <style>
        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <!-- <div class="carousel">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($page->images() as $image) : ?>
                    <?php if ($image->indexOf() === 0) : ?>
                        <div class="carousel-item active">
                        <?php else : ?>
                            <div class="carousel-item">
                            <?php endif ?>
                            <img class="d-block w-100" src="<?= $image->crop(800, 600)->url() ?>" alt="<?= $image->alt() ?>">
                            </div>
                        <?php endforeach ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
            </div>
        </div>
    </div> -->


    <?php if ($group === $board) : ?>
        <div class="teams--container">
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('board_members'),
                    'info' => 'board_function'
                ]) ?>
            </div>
        </div>

    <?php endif ?>

    <?php if ($group === $men) : ?>
        <?php $collection = collection('team_members')
            ->filterBy('coaching_team', 'Heren')
            ->filterBy('coaching', true);
        ?>

        <?php if ($collection->count() != 0) : ?>
            <div class="teams--container">
                <h2>Coaching staff</h2>
                <div class="teams--members">
                    <?php snippet('team_members', [
                        'team_members' => $collection,
                        'info' => 'coaching_function'
                    ]) ?>
                </div>
            </div>
        <?php endif ?>


        <?php
        $gender = 'male';
        team($positions, $gender);
        ?>
    <?php endif ?>

    <?php if ($group === $women) : ?>
        <?php $collection = collection('team_members')
            ->filterBy('coaching_team', 'Dames')
            ->filterBy('coaching', true);
        ?>

        <?php if ($collection->count() != 0) : ?>
            <div class="teams--container">
                <h2>Coaching staff</h2>
                <div class="teams--members">
                    <?php snippet('team_members', [
                        'team_members' => $collection,
                        'info' => 'coaching_function'
                    ]) ?>
                </div>
            </div>
        <?php endif ?>

        <?php
        $gender = 'female';
        team($positions, $gender);
        ?>

    <?php endif ?>
</main>
<?php snippet('footer') ?>