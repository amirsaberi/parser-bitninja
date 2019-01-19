<?php

return [
    'parser' => [
        'name'          => 'BitNinja',
        'enabled'       => true,
        'sender_map'    => [
            '/incident-report@bitninja.io/',
        ],
        'body_map'      => [
            //
        ],
        'aliases'       => [
        ],
    ],

    'feeds' => [
        'login-attack' => [
            'class'     => 'HACK_ATTACK',
            'type'      => 'ABUSE',
            'enabled'   => true,
            'fields'    => [
                'Report-Type',
                'Source',
                'Date',
            ],
        ],

        'info' => [
            'class'     => 'HACK_ATTACK',
            'type'      => 'INFO',
            'enabled'   => true,
            'fields'    => [
                'Report-Type',
                'Source',
                'Date',
            ],
        ],

        'harvesting' => [
            'class'     => 'HACK_ATTACK',
            'type'      => 'ABUSE',
            'enabled'   => true,
            'fields'    => [
                'Report-Type',
                'Source',
                'Date',
            ],
        ],

        'ddos' => [
            'class'     => 'HACK_ATTACK',
            'type'      => 'ABUSE',
            'enabled'   => true,
            'fields'    => [
                'Report-Type',
                'Source',
                'Date',
            ],
        ],
    ],
];
