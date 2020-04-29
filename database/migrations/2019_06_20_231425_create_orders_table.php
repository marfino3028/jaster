<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->string('nama_order');
            $table->string('nama_paket');
            $table->string('data_logo');
            $table->string('data_website');
            $table->string('tipe_post');
            $table->string('target');
            $table->string('warna')->nullable();
            $table->date('deadline');
            $table->text('request')->nullable();
            $table->text('web_pesaing')->nullable();
            $table->text('notes')->nullable();
            $table->boolean('deleting')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
