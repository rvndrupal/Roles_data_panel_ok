<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $name=$faker->sentence;
    return [
        'name'=> $name,
        'url'=>str_slug($name,'-'),
        'description'=> $faker->sentence,
    ];
});
