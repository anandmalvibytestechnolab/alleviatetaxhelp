<?php

use App\User;
use database\seeds\OnlyLocalSeeder;
use Illuminate\Database\Seeder;

class UserSeeder extends OnlyLocalSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class)->create(['email' => 'admin@admin.com']);
    }
}
