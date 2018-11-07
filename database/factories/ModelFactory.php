<?php 

use Faker\Generator as Faker;

$factory->define(App\Articulo::class, function (Faker $faker) {
    return [
        'nombre_articulo' => $faker->sentence(2),
        'descripcion_articulo' => $faker->text(140),
        'existencia_articulo' => $faker->biasedNumberBetween('254','506'),
    ];
});

$factory->define(App\departamento::class, function (Faker $faker) {
    return [
        'id_departamento' => $faker->sentence(2),
        'nombre_departamento' => $faker->text(140),
        'encargado_departamento' => $faker->biasedNumberBetween('254','506'),
        'extension_departamento' => $faker->text(140),
        'rol_departamento' => $faker->text(140),
        'password_departamento' => $faker->text(140),
    ];
});
