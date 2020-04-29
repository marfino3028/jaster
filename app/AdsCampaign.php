<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsCampaign extends Model
{
    protected $primaryKey = 'adscampaign_id';

    protected $fillable = ['adsakun_id', 'nama_customer', 'tanggal_mulai', 'tanggal_akhir', 'saldo_adwords'];

    public function transfer() {
        return $this->hasMany('App\AdsTransfer', 'adstransfer_id');
    }

    public function akun() {
        return $this->belongsTo('App\AdsAkun', 'adsakun_id');
    }
}
