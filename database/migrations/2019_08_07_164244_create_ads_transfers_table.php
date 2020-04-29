<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_transfers', function (Blueprint $table) {
            $table->bigIncrements('adstransfer_id');
            $table->unsignedBigInteger('adscampaign_id');
            $table->date('tanggal_transfer')->nullable();
            $table->integer('saldo_transfer');
            $table->boolean('transfered')->default(false);
            $table->timestamps();

            $table->foreign('adscampaign_id')->references('adscampaign_id')
                    ->on('ads_campaigns')
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
        Schema::dropIfExists('ads_transfers');
    }
}
