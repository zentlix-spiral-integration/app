<?php

declare(strict_types=1);

return [
    'directories' => [directory('app')],
    'exclude'     => [
        directory('resources'),
        directory('config'),
        'tests',
        'migrations',
    ],
    'scopes' => [
        'cycleSchema' => [
            'directories' => [],
        ],
        'bus' => [
            'directories' => [],
        ],
    ]
];
