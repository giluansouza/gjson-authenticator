<?php

namespace DevBoot\Core;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * DevBoot | Class Connect [ Singleton Pattern ]
 * @author Giluan Souza <contato@giluansouza.com.br>
 * @package DevBoot\Core
 */
class Connect
{

    public function __construct()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => $_ENV["DB_CONNECTION"],
            'host' => $_ENV["DB_HOST"],
            'database' => $_ENV["DB_DATABASE"],
            'username' => $_ENV["DB_USERNAME"],
            'password' => $_ENV["DB_PASSWORD"],
            'charset' => $_ENV["DB_CHARSET"],
            'collation' => $_ENV["DB_COLLATION"]
        ]);

        return $capsule->bootEloquent();
    }
}