<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\LocationsModel;

$factory->define(LocationsModel::class, function (Faker $faker) {
    return [
      'street' => $faker  -> streetAddress(),
      'city' => $faker  -> city(),
      'state' => $faker -> country()
    ];
});
