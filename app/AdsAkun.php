<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsAkun extends Model
{
    protected $primaryKey = 'adsakun_id';

    protected $fillable = ['nama_akun'];

    public function campaign() {
        return $this->hasOne('App\AdsCampaign', 'adscampaign_id');
    }
}
