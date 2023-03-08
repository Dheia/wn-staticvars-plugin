<?php

return [
    'plugin' => [
        'name'        => 'Static Vars',
        'description' => 'Output variables and static info',
    ],

    'statuses' => [
        0   => 'New',
        10  => 'Approved',
        20  => 'Completed',
        100 => 'Disabled',
        110 => 'Active',
        410 => 'Removal',
    ],

    'targets' => [
        '_self'   => 'Current window',
        '_blank'  => 'In new tab',
        '_parent' => 'Frame-parent',
        '_top'    => 'Full window',
    ],
];
