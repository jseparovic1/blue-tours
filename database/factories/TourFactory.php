<?php

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\Str;

/** @var EloquentFactory $factory */
$factory->define(App\Tour::class, function (Faker $faker) {
    $price = $faker->numberBetween(100, 500);
    $title = 'Tour title';
    $slug = Str::slug($title);

    return [
        'hero_description' => 'Saling around the labryinth of pakleni ilands! Find hidden beautiful beaches and deserted lagoons',
        'title' => $title,
        'slug' => $slug,
        'featured' => true,
        'type' => 'normal',
        'recommended' => true,
        'short_description' => 'Saling around the labryinth of pakleni ilands! Find hidden beautiful beaches and deserted lagoons',
        'description' => file_get_contents(database_path('content/tour.html')),
        'departure_location' => 'Split, Riva',
        'departure_time' => '07:00, Every day',
        'price' => $price,
    ];
});
