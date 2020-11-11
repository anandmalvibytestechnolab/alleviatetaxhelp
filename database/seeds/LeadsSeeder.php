<?php

use database\seeds\OnlyLocalSeeder;
use Models\Lead;

class LeadsSeeder extends OnlyLocalSeeder
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
