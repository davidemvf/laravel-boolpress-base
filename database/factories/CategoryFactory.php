<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {

    $categories = ['Scienza', 'Politica', 'Sport', 'Arte e Cultura', 'Spettacolo'];
    return [
        'name'=> $faker -> unique() -> randomElement($categories)
    ];
});
