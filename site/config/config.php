<?php

return [
    'debug'  => true,
    'email' => [
        'transport' => [
            'type' => 'smtp',
            'host' => 'mailserver.antwerparmadillos.internal',
            'port' => 1025,
            'security' => false
        ]
    ],
];
