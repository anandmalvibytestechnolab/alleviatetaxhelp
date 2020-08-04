<?php

namespace Tests\Unit;

use database\seeds\OnlyLocalSeeder;
use File;
use Tests\TestCase;
use Illuminate\Database\Seeder;

class SafeSeedersTest extends TestCase
{
    /**
     * @test
     */
    function only_local_seeder_class_extends_migration()
    {
        $onlyLocalSeeder = new OnlyLocalSeeder;

        $this->assertInstanceOf(Seeder::class, $onlyLocalSeeder);
    }

    /**
     * @test
     **/
    function all_seeders_extend_only_local_seeder_class()
    {
        $seeders = collect(File::files(database_path('/seeds')))
            ->map(function ($seeder) {
                return pathinfo($seeder->getFileName())['filename'];
            })
            ->reject(function ($file) {
                return $file == 'DatabaseSeeder' || $file == 'FakeCurrentSeedData';
            });

        $seeders->each(function ($seeder) {
            $seeder = new $seeder;
            $this->assertInstanceOf(OnlyLocalSeeder::class, $seeder);
        });
    }
}
