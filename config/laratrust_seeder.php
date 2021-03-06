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
            'students' =>'c,r,u,d',
            'teachers' =>'c,r,u,d',
            'subjects' =>'c,r,u,d',
            'courses' =>'c,r,u,d',
            'books'   =>  'c,r,u,d',
            'tasks'   =>'c,r,u,d',
            'concours'   =>'c,r,u,d',
        ],
        'admin' => [

        ],
        'teacher' => [
            'courses' =>'c,r,u,d',
            'tasks'   =>'c,r,u,d',
            'books'    =>'r'
        ],
        'student' =>[
            'subjects' =>'r',
            'courses' =>'r',
            'tasks'   =>',r',
            'books'    =>'r',
            'concours'    =>'r'
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
