<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_lists', function (Blueprint $table) {
            $table->bigIncrements('progresslist_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->boolean('nilai')->default(false);
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
        Schema::dropIfExists('progress_lists');
    }
}
