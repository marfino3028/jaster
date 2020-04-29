<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsTransfer extends Model
{
    protected $fillable = ['adscampaign_id', 'saldo_transfer', 'tanggal_transfer', 'transfered'];

    public function campaign() {
        return $this->belongsTo('App\AdsCampaign', 'adscampaign_id');
    }
}
