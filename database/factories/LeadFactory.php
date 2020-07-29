<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'current_sit' => 'test',
        'other_current_situation' => 'test',
        'tax_debt' => 'test',
        'enrolled_irs' => 'test',
        'Employment_status' => 'test',
        'first_name' => 'test',
        'last_name' => 'test',
        'email_address' => 'test',
        'primary_phone' => 'test',
        'state' => 'test',
        'zip_code' => 'test',
    ];
});
