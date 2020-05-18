<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table      = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable   = [
        'order_id',
        'quantity',
        'biaya',
        'paket',
        'total',
    ];
    public $timestamps = false;
    public function order() {
        return $this->belongsTo('App\Orders', 'transaksi_id');
    }
}
