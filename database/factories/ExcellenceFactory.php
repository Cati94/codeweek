<?php

use Faker\Generator as Faker;

$factory->define(App\Excellence::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
        'edition' => $faker->numberBetween(2018,2020)
    ];
});