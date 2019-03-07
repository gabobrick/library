<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'publishedDate' => $faker->date,
        'category_id' => function(){
        	return factory(App\Category::class)->create()->id;
        }
    ];
});
