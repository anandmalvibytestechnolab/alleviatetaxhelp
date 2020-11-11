<?php

use database\seeds\OnlyLocalSeeder;
use Models\CcpaLead;

class CcpaLeadSeeder extends OnlyLocalSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CcpaLead::truncate();
        factory(CcpaLead::class, 108)->create();
    }
}
