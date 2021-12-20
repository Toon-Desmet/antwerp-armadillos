<?php

return function () {

    return collection('team_members')
        ->filterBy("board", true);
};
