<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LocationsModel;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'street' => $faker  -> streetAddress(),
      'city' => $faker  -> city(),
      'state' => $faker -> country()
    ];
});
