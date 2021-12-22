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
?>
<main>
    <nav>
        <ul>
            <li><a href="<?= $page->url() . "?group=" . $board ?>">Bestuur</a></li>
            <li><a href="<?= $page->url() . "?group=" . $men ?>">Heren</a></li>
            <li><a href="<?= $page->url() . "?group=" . $women ?>">Dames</a></li>
        </ul>
    </nav>

    <carousel>
        <!-- //TODO make carrousel with editable images-->
    </carousel>

    <?php if ($group === $board) : ?>
        <?php snippet('team_members', [
            'team_members' => collection('board_members'),
            'info' => 'board_function'
        ]) ?>

    <?php endif ?>

    <?php if ($group === $men) : ?>
        <h2>Coaching staff</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('coaching_team', 'Heren')
                ->filterBy('coaching', true),
            'info' => 'coaching_function'
        ]) ?>
        <h2>Attack</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Attack'),
            'info' => 'position'
        ]) ?>
        <h2>Midfield</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Midfield'),
            'info' => 'position'
        ]) ?>
        <h2>Defence</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Defence'),
            'info' => 'position'
        ]) ?>
        <h2>Goalie</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Goalie'),
            'info' => 'position'
        ]) ?>

    <?php endif ?>

    <?php if ($group === $women) : ?>

        <h2>Coaching staff</h2>
        <?php snippet('coaching_members', [
            'team_members' => collection('team_members')
                ->filterBy('coaching_team', 'Dames')
                ->filterBy('coaching', true),
            'info' => 'coaching_function'
        ]) ?>
        <h2>Attack</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Attack'),
            'info' => 'position'
        ]) ?>
        <h2>Midfield</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Midfield'),
            'info' => 'position'
        ]) ?>
        <h2>Defence</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Defence'),
            'info' => 'position'
        ]) ?>
        <h2>Goalie</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Goalie'),
            'info' => 'position'
        ]) ?>

    <?php endif ?>
</main>
<?php snippet('footer') ?>