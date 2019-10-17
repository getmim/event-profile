<?php

return [
    'EventProfile\\Model\\EventProfileChain' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 2000
            ],
            'event' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 3000
            ],
            'profile' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 4000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 9000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ]
        ]
    ]
];