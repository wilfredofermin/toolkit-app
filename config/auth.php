<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'ldap',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    'providers' => [
  
        'ldap' => [
        'driver' => 'ldap',
        'model' => LdapRecord\Models\ActiveDirectory\User::class,
        'rules' => [
            // App\Ldap\Rules\VcontrolAccessUsers::class,
        ],
        'database' => [
            'model' => App\Models\User::class,
            'sync_passwords' => true,
            'sync_attributes' => [
                'username' => 'samaccountname',
                'cn' => 'cn',
                'name' => 'name',
                'displayname' => 'displayname',
                'sn' => 'sn',
                'initials' => 'initials',
                'givenname' => 'givenname',
                'postofficebox' => 'postofficebox',

                'email' => 'email',
                'userprincipalname' => 'userprincipalname',
                'title' => 'title',
                'description' => 'description',
                'department' => 'department',
                'physicaldeliveryofficename' => 'physicaldeliveryofficename',
                'manager' => 'manager',
                'company' => 'company',
                'telephonenumber' => 'telephonenumber',
                'useraccountcontrol' =>'useraccountcontrol',
                'user_template' =>'wwwhomepage',
                'lockouttime' =>'lockouttime',
                'whencreated' =>'whencreated',
                'whenchanged' =>'whenchanged',
                'pwdlastset' =>'pwdlastset',
                'lastlogontimestamp' =>'lastlogontimestamp',
                'lastlogoff' =>'lastlogoff',
                'logoncount' =>'logoncount',
                'badpwdcount' =>'badpwdcount',
                'msexcharchivename' =>'msexcharchivename',
               
            ],
        ],
    ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];