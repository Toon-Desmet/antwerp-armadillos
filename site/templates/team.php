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