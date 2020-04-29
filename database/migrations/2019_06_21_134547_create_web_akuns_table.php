<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_akuns', function (Blueprint $table) {
            $table->bigIncrements('webakun_id');
            $table->unsignedBigInteger('order_id');
            $table->string('akun_username')->nullable();
            $table->string('akun_email')->nullable();
            $table->string('akun_password')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')
                    ->on('orders')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_akuns');
    }
}
