<?php

use KrisanAlfa\Theme\Schema\String;
use KrisanAlfa\Theme\Schema\Password;
use KrisanAlfa\Theme\Schema\Date;

return array(
    // User using hashing for password, so we need an observer
    'observers' => array(
        'Norm\\Observer\\Hashed' => array()
    ),
    // Source structure
    'schema' => array(
        'username'    => String::create('username')->filter('trim|required|unique:User,username'),
        'email'       => String::create('email')->filter('trim|required|unique:User,email'),
        'first_name'  => String::create('first_name')->filter('trim|required'),
        'middle_name' => String::create('middle_name')->filter('trim'),
        'last_name'   => String::create('last_name')->filter('trim|required'),
        'birth_place' => String::create('birth_place')->filter('trim'),
        'birth_date'  => Date::create('birth_date')->filter('trim'),
        'password'    => Password::create('password')->filter('trim|required|confirmed'),
    ),
);