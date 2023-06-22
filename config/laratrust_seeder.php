<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'formations' => 'c,r,u,d',
            'salaries' => 'c,r,u,d',
            'postes' => 'c,r,u,d',
            'stages' => 'c,r,u,d',
            'posts' => 'c,r,u,d',
            'demandeinscriptions' => 'r,d',
            'profile' => 'r,u'
        ],
        'employe' => [
            'demandeinscriptions' => 'c,u,d',
            'posts' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'stagiaire' => [
            'demandeinscriptions' => 'c,u,d',
            'profile' => 'r,u'
        ],
        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
