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
        'super_admin' => [
            'users' => 'c,r,u,d',
            'student' =>'c,r,u,d',
            'teacher' =>'c,r,u,d',
            'subjects' =>'c,r,u,d',
            'courses' =>'c,r,u,d',
        ],
        'admin' => [

        ],
        'teacher' => [

        ],
        'student' =>[

        ],
      /*   'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ] */
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
