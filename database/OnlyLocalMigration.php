<?php

namespace database\migrations;

use Illuminate\Database\Migrations\Migration;

class OnlyLocalMigration extends Migration
{
    public function __construct()
    {
        $this->disableMigrationsInLiveServer();
    }


    /**
     * Prevent migrations from running in live server
     *
     * @throws \Exception
     */
    protected function disableMigrationsInLiveServer()
    {
        if (!machine_has_local_hostname() || app()->environment() == 'production') {
            throw new \Exception('Unable to run migrations due to hostname is not in the REGISTERED_DEVELOPER_MACHINE_HOSTNAMES environment variable. This prevents you from running migrations in live server!', 403);
        }
    }
}
