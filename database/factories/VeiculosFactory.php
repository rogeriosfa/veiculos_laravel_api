<?php

use Faker\Generator as Faker;

$factory->define(App\Veiculos::class, function (Faker $faker) {
    return [
        'veiculo' => $faker->name,
        'marca' => $faker->name,
        'ano' => $faker->year,
        'descricao' => $faker->sentence(),
        'vendido' => 0,
    ];
});
