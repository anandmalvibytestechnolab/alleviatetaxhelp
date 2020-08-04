<?php

use Illuminate\Database\Seeder;
use Models\Lead;

class LeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::truncate();
        factory(Lead::class, 108)->create();
    }
}
