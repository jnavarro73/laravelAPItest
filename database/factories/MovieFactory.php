<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;


$factory->define('App\Movie', function (Faker $faker) {
    return [
    	'title' => $faker->name,
    	'year' => $faker->numberBetween(1900, date('Y')) ,
    	
       
    ];
});
