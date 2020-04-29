<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Orders::class, 5)
                ->create()
                ->each(function ($order) {
                    $order->akun()
                        ->save(factory(App\WebAkun::class)
                        ->make());
                });
    }
}
