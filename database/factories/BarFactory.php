<?php

use App\Bar;
use Faker\Generator as Faker;

$factory->define(Bar::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'about'       => $faker->sentences(3, true),
        'language'      => $faker->randomElement(['french', 'english']),
        'code'        => date("y").substr(number_format(time() * mt_rand(),0,'',''),0,6),
        'adress' => $faker->name,
        'theme'       => 'flatly',
    ];
});
