<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProgressList;

class Orders extends Model
{
    protected $primarykey = 'order_id';
    protected $table = 'orders';

    protected $fillable = ['nama_order', 'nama_paket', 'data_logo', 'data_website', 
    'tipe_post', 'target', 'warna', 'deadline', 'request', 'web_pesaing', 'deleting'];

    public function akun() {
        return $this->hasOne('App\WebAkun', 'order_id');
    }

    public function progressList() {
        return $this->hasMany('App\ProgressList', 'order_id');
    }

    public function website() {
        return $this->hasOne('App\Website', 'order_id');
    }
}
