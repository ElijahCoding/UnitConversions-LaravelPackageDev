<?php

use \Faker\Generator;

/* @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Spatie\UnitConversions\Models\MyModel::class, function (Generator $faker) {
    return [
        'name' => $faker->firstName,
    ];
});
