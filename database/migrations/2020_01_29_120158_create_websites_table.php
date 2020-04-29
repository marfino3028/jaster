<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('websiteId');
            $table->unsignedBigInteger('hostingId')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->string('domain');
            $table->date('duedate')->nullable();
            $table->timestamps();

            $table->foreign('hostingId')->references('hostingId')
                        ->on('hostings')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');

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
        Schema::dropIfExists('websites');
    }
}
