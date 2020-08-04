<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Models\CcpaLead;

$factory->define(CcpaLead::class, function (Faker $faker) {
    return [
        'requestor' => 'resident',
        'requestoptions' => 'option a, option b',
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'street' => $faker->streetName,
        'apt' => 9,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => 99999,
        'email_address' => $faker->email,
        'primary_phone' => $faker->phoneNumber,
    ];
});
