<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Crossel_product ;
use Faker\Generator as Faker;

$factory->define(Crossel_product ::class, function (Faker $faker) {
    return [
        'product_id' => '1',
        'crossel_id' => '1', 
    ];
});
