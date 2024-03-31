<?php

/*
Since we had this in composer.json:
{
    "require": {
        "illuminate/database": "^11.0"
    },
}
We can make use of statements below
We did as Capsule to have easier namespace reference
*/

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'website',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

$capsule->bootEloquent();
