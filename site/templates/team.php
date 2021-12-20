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

echo $group
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
        <!-- //TODO make carousel -->
    </carousel>

    <?php if ($group === $board) : ?>
        <?php snippet('board_members', [
            'team_members' => collection('board_members'),
        ]) ?>

    <?php endif ?>

    <?php if ($group === $men) : ?>
        <h2>Coaching staff</h2>
        <?php snippet('coaching_members', [
            'team_members' => collection('team_members')
                ->filterBy('coaching_team', 'Heren')
                ->filterBy('coaching', true)
        ]) ?>
        <h2>Attack</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Attack')
        ]) ?>
        <h2>Midfield</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Midfield')
        ]) ?>
        <h2>Defence</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Defence')
        ]) ?>
        <h2>Goalie</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'male')
                ->filterBy('position', 'Goalie')
        ]) ?>

    <?php endif ?>

    <?php if ($group === $women) : ?>

        <h2>Coaching staff</h2>
        <?php snippet('coaching_members', [
            'team_members' => collection('team_members')
                ->filterBy('coaching_team', 'Dames')
                ->filterBy('coaching', true)
        ]) ?>
        <h2>Attack</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Attack')
        ]) ?>
        <h2>Midfield</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Midfield')
        ]) ?>
        <h2>Defence</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Defence')
        ]) ?>
        <h2>Goalie</h2>
        <?php snippet('team_members', [
            'team_members' => collection('team_members')
                ->filterBy('gender', 'female')
                ->filterBy('position', 'Goalie')
        ]) ?>

    <?php endif ?>
</main>
<?php snippet('footer') ?>