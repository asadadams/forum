<?php
use Illuminate\Database\Capsule\Manager as Capsule;

/*
|--------------------------------------------------------------------------
| Eloquent ORM Setup
|--------------------------------------------------------------------------
|
| Blocks uses a Eloquent ORM
| This file is where Eloquent ORM setup is done . There is no need make changes here.
| To change Database configurations, refer to the database config in the app/config directory
|
*/

$capsule = new Capsule;

$capsule->addConnection( [
    'driver'    => DB_DRIVER,
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USERNAME,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATION,
    'prefix'    => DB_PREFIX,
] );

$capsule->setAsGlobal();

// Setup the Eloquent ORM
$capsule->bootEloquent();
?>