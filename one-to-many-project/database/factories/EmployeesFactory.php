<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\EmployeesModel;

$factory->define(EmployeesModel::class, function (Faker $faker) {
    return [
      'firstname' => $faker  -> firstName(),
      'lastname' => $faker  -> lastName(),
      'dateOfBirth' => $faker -> date(),
      'role' => $faker -> jobTitle()
    ];
});
