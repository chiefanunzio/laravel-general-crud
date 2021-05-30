<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matche;
use Faker\Generator as Faker;   

$factory->define(Matche::class, function (Faker $faker) {
    return [
        'team1' => $faker -> firstName,
        'team2' => $faker -> lastName,
        'point1' => $faker -> numberBetween(1, 10),
        'point2'  => $faker -> numberBetween(1, 10),   
        'result' => $faker -> numberBetween(1, 2),         
    ];
});         