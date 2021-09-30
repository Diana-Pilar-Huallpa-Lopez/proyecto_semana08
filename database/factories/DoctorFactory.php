<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {

    return [
        'ape_nom' => $faker->word,
        'ndi' => $faker->word,
        'especialidad' => $faker->word
    ];
});
