<?php

namespace database\seeds;

use DB;
//Used by inheritance in seeders
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class OnlyLocalSeeder extends Seeder
{
    /**
     * @var Faker
     */
    public $faker;

    public function __construct()
    {
        $this->disableSeedersInLiveServer();
    }


    /**
     * Prevent migrations from running in live server
     *
     * @throws \Exception
     */
    protected function disableSeedersInLiveServer()
    {
        if (!machine_has_local_hostname()) {
            throw new \Exception('Unable to run seeders due to hostname is not in the REGISTERED_DEVELOPER_MACHINE_HOSTNAMES environment variable. This prevents you from running seeders in live server!', 403);
        }
    }

    protected function generateFakeParagraphs($how_many)
    {
        $output = '';

        foreach (range(0, $how_many) as $item) {
            $output .= "<p>{$this->faker->paragraph}</p>";
        }

        return $output;
    }

    /**
     * Disable foreign key checks in order to allow for migration running when there are constraints. Allows to truncate tables.
     * @param $connection string Existing connection name in config/database.php
     */
    protected function disableForeignKeyChecks($connection)
    {
        $entity = DB::connection($connection);
        $entity->statement('SET FOREIGN_KEY_CHECKS = 0;');
    }

    /**
     * Re enable foreign key checks.
     * @param $connection string Existing connection name in config/database.php
     */
    protected function enableForeignKeyChecks($connection)
    {
        $entity = DB::connection($connection);
        $entity->statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
