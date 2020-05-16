<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProgressList;

class Orders extends Model
{
    protected $primarykey = 'order_id';
    protected $table = 'orders';

    protected $fillable = ['nama', 'brand', 'data_logo', 'data_website','jabatan','wa','alamat',
    'via','tau_dari',
    'tipe_post', 'target', 'warna', 'deadline', 'request',  'renewal', 'dp', 'deleting'];

    public function akun() {
        return $this->hasOne('App\WebAkun', 'order_id');
    }

    public function progressList() {
        return $this->hasMany('App\ProgressList', 'order_id');
    }

    public function website() {
        return $this->hasOne('App\Website', 'order_id');
    }
    public function transaksi() {
        return $this->hasMany('App\Transaksi', 'order_id');
    }
}
