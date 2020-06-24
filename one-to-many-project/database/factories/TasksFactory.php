<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $faker  -> catchPhrase(),
      'description' => $faker  -> text(),
      'deadline' => $faker -> dateTimeBetween('now', 'next month +7 days')
    ];
});
