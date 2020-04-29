<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\WebAkun;
use Faker\Generator as Faker;

$factory->define(WebAkun::class, function (Faker $faker) {
    return [
        'akun_username' => $faker->userName,
        'akun_email' => $faker->email,
        'akun_password' => $faker->password,
    ];
});
