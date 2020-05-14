<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable   = [
        'quantity',
        'biaya',
        'paket',
        'total',

    ];

    public function transaksi() {
        return $this->hasOne('App\Website', 'transaksi_id');
    }
}
