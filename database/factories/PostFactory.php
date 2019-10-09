<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title' => $faker -> unique() -> sentence(3),
      'description' => $faker -> unique() -> text(150),
      'author' => $faker -> name($gender = null) 
    ];
});
