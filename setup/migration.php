<?php
require_once( 'app/Config/database.php' );
return [
    'paths' => [
        'migrations' => 'database/migrations'
    ],
    'migration_base_class'=> 'Migration',
    'templates'=>[
        'file'=> 'app/Core/Migration.template'
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_database' => 'dev',
        'dev' => [
            'adapter' => DB_DRIVER,
            'host' => DB_HOST,
            'name' => DB_NAME,
            'user' => DB_USERNAME,
            'pass' => DB_PASSWORD,
            'port' => DB_PORT
        ]
    ]
];
?>