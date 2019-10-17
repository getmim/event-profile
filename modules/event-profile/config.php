<?php

return [
    '__name' => 'event-profile',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/event-profile.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/event-profile' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'event' => NULL
            ],
            [
                'profile' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'EventProfile\\Model' => [
                'type' => 'file',
                'base' => 'modules/event-profile/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'event-profile' => [
                'id' => [
                    'type' => 'number'
                ],
                'event' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Event\\Library\\Event',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'event'
                ],
                'profile' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Profile\\Model\\Profile',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'profile'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'event' => [
                'performers' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'EventProfile\\Model\\EventProfileChain',
                            'field' => 'event'
                        ],
                        'identity' => 'profile'
                    ],
                    'model' => [
                        'name' => 'Profile\\Model\\Profile',
                        'field' => 'id'
                    ],
                    'format' => 'profile'
                ]
            ]
        ]
    ]
];