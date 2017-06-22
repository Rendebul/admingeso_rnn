<?php

use App\Comuna;
use App\Establecimiento;
use App\Region;
use App\ServicioSalud;
use App\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
        'api_token' => str_random(60),
        'cargo' => $faker->jobTitle,
        'telefono' => $faker->numberBetween(56900000000, 56999999999)
    ];
});

$factory->define(Spatie\Permission\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => str_slug($faker->name),
        'label' => $faker->sentence,
    ];
});

$factory->define(Spatie\Permission\Models\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => str_slug($faker->name),
        'label' => $faker->sentence,
    ];
});

$factory->define(Region::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->state,
        'code' => $faker->unique()->randomDigitNotNull
    ];
});

$factory->define(ServicioSalud::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->state,
        'code' => $faker->unique()->numberBetween(400, 700),
        'region_id' => function () {
            return factory(Region::class)->create()->id;
        }
    ];
});

$factory->define(Comuna::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->state,
        'code' => $faker->unique()->numberBetween(10000, 16000),
        'servicio_id' => function () {
            return factory(ServicioSalud::class)->create()->id;
        }
    ];
});

$factory->define(Establecimiento::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->state,
        'code' => $faker->unique()->numberBetween(20000, 36000),
        'comuna_id' => function () {
            return factory(Comuna::class)->create()->id;
        }
    ];
});
