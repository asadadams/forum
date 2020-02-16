<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Phinx\Migration\AbstractMigration;

/*
|--------------------------------------------------------------------------
| Migration Class
|--------------------------------------------------------------------------
|
| This is the main Migration for the Blocks MVC framework.
|
*/

class Migration extends AbstractMigration {
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    public $capsule;
    /** @var \Illuminate\Database\Schema\Builder $capsule */
    public $schema;

    public function init() {
        $this->capsule = new Capsule;
        $this->capsule->addConnection( [
            'driver'    => DB_DRIVER,
            'host'      => DB_HOST,
            'database'  => DB_NAME,
            'username'  => DB_USERNAME,
            'password'  => DB_PASSWORD,
            'charset'   => DB_CHARSET,
            'collation' => DB_COLLATION,
            'prefix'    => DB_PREFIX,
        ] );

        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
        $this->schema = $this->capsule->schema();
    }
}

?>