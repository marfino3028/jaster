<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Orders;
use Faker\Generator as Faker;

$factory->define(Orders::class, function (Faker $faker) {

    $paket      = array('Ekonomis', 'Basic', 'Premium', 'Business', 'Luxury');
    $nama_paket = array_rand($paket);

    $logo       = array('Dibuatkan', 'Email');
    $data       = array('Full Kita', 'Full Client', 'Kita Bantu');
    $tipePost   = array('Artikel', 'Produk', 'Service', 'Gallery', 'Elementor', 'Landing');
    $target     = array('WA atau Telepon', 'Email', 'Checkout');

    return [
        'nama_order'   => $faker->name,
        'nama_paket'   => $paket[$nama_paket],
        'data_logo'    => $logo[array_rand($logo)],
        'data_website' => $data[array_rand($data)],
        'tipe_post'    => $tipePost[array_rand($tipePost)],
        'target'       => $target[array_rand($target)],
        'warna'        => $faker->hexcolor,
        'deadline'     => date('Y-m-d'),
        'request'      => $faker->text,
        'web_pesaing'  => $faker->text,
    ];
});
