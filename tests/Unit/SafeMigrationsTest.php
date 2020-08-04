<?php

namespace Tests\Unit;

use database\migrations\OnlyLocalMigration;
use File;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class SafeMigrationsTest extends TestCase
{
    /**
     * @test
     */
    function only_local_migration_class_extends_migration()
    {
        $onlyLocalMigration = new OnlyLocalMigration;

        $this->assertInstanceOf(Migration::class, $onlyLocalMigration);
    }

    /**
     * @test
     **/
    function all_migrations_extend_only_local_migration_class()
    {
        $migrations = collect(File::files(database_path('/migrations')))
            ->map(function ($migration) {
                $fileName = pathinfo($migration->getFileName())['filename'];
                return Str::studly($this->removeDateFromMigrationName($fileName));
            });

        $migrations->each(function ($seeder) {
            $seeder = new $seeder;
            $this->assertInstanceOf(OnlyLocalMigration::class, $seeder);
        });
    }

    private function removeDateFromMigrationName($fileName)
    {
        return preg_replace('/[$^0-9]{4}_[0-9]{2}_[$^0-9]{2}_[$^0-9]{6}_/', '', $fileName);
    }
}
