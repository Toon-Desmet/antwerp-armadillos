<?php

return function () {
    $emails = [];
    foreach (page('contact')->emails()->toStructure() as $key => $email) {

        foreach ($email->email() as $key => $i) {
            array_push($emails, $i);
        }
    };
    return $emails;
};
