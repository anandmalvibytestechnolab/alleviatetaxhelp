<?php

use Illuminate\Database\Seeder;
use Models\CcpaLead;

class CcpaLeadSeeder extends Seeder
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
