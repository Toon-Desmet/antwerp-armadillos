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
    <nav class="nav--teams">
        <ul class="nav--teams-list">
            <li><a href="<?= $page->url() . "?group=" . $board ?>"><h2>Bestuur</h2></a></li>
            <li><a href="<?= $page->url() . "?group=" . $men ?>"><h2>Heren</h2></a></li>
            <li><a href="<?= $page->url() . "?group=" . $women ?>"><h2>Dames</h2></a></li>
        </ul>
    </nav>

    <carousel>
        <!-- //TODO make carrousel with editable images-->
    </carousel>

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
        <div class="teams--container">
            <h2>Coaching staff</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('coaching_team', 'Heren')
                        ->filterBy('coaching', true),
                    'info' => 'coaching_function'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Attack</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'male')
                        ->filterBy('position', 'Attack'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Midfield</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'male')
                        ->filterBy('position', 'Midfield'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Defence</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'male')
                        ->filterBy('position', 'Defence'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Goalie</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'male')
                        ->filterBy('position', 'Goalie'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>

    <?php endif ?>

    <?php if ($group === $women) : ?>

        <div class="teams--container">
            <h2>Coaching staff</h2>
            <div class="teams--members">
                <?php snippet('coaching_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('coaching_team', 'Dames')
                        ->filterBy('coaching', true),
                    'info' => 'coaching_function'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Attack</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'female')
                        ->filterBy('position', 'Attack'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Midfield</h2>
                <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'female')
                        ->filterBy('position', 'Midfield'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Defence</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'female')
                        ->filterBy('position', 'Defence'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>
        <div class="teams--container">
            <h2>Goalie</h2>
            <div class="teams--members">
                <?php snippet('team_members', [
                    'team_members' => collection('team_members')
                        ->filterBy('gender', 'female')
                        ->filterBy('position', 'Goalie'),
                    'info' => 'position'
                ]) ?>
            </div>
        </div>

    <?php endif ?>
</main>
<?php snippet('footer') ?>